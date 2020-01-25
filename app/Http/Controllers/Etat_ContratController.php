<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEtat_ContratRequest;
use App\Http\Requests\UpdateEtat_ContratRequest;
use App\Repositories\Etat_ContratRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Etat_ContratController extends AppBaseController
{
    /** @var  Etat-ContratRepository */
    private $etatContratRepository;

    public function __construct(Etat_ContratRepository $etatContratRepo)
    {
        $this->etatContratRepository = $etatContratRepo;
    }

    /**
     * Display a listing of the Etat-Contrat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $etatContrats = $this->etatContratRepository->all();

        return view('etat-_contrats.index')
            ->with('etatContrats', $etatContrats);
    }

    /**
     * Show the form for creating a new Etat-Contrat.
     *
     * @return Response
     */
    public function create()
    {
        return view('etat-_contrats.create');
    }

    /**
     * Store a newly created Etat-Contrat in storage.
     *
     * @param CreateEtat-ContratRequest $request
     *
     * @return Response
     */
    public function store(CreateEtat_ContratRequest $request)
    {
        $input = $request->all();

        $etatContrat = $this->etatContratRepository->create($input);

        Flash::success('Etat- Contrat saved successfully.');

        return redirect(route('etatContrats.index'));
    }

    /**
     * Display the specified Etat-Contrat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $etatContrat = $this->etatContratRepository->find($id);

        if (empty($etatContrat)) {
            Flash::error('Etat- Contrat not found');

            return redirect(route('etatContrats.index'));
        }

        return view('etat-_contrats.show')->with('etatContrat', $etatContrat);
    }

    /**
     * Show the form for editing the specified Etat-Contrat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $etatContrat = $this->etatContratRepository->find($id);

        if (empty($etatContrat)) {
            Flash::error('Etat- Contrat not found');

            return redirect(route('etatContrats.index'));
        }

        return view('etat-_contrats.edit')->with('etatContrat', $etatContrat);
    }

    /**
     * Update the specified Etat-Contrat in storage.
     *
     * @param int $id
     * @param UpdateEtat-ContratRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEtat_ContratRequest $request)
    {
        $etatContrat = $this->etatContratRepository->find($id);

        if (empty($etatContrat)) {
            Flash::error('Etat- Contrat not found');

            return redirect(route('etatContrats.index'));
        }

        $etatContrat = $this->etatContratRepository->update($request->all(), $id);

        Flash::success('Etat- Contrat updated successfully.');

        return redirect(route('etatContrats.index'));
    }

    /**
     * Remove the specified Etat-Contrat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $etatContrat = $this->etatContratRepository->find($id);

        if (empty($etatContrat)) {
            Flash::error('Etat- Contrat not found');

            return redirect(route('etatContrats.index'));
        }

        $this->etatContratRepository->delete($id);

        Flash::success('Etat- Contrat deleted successfully.');

        return redirect(route('etatContrats.index'));
    }
}
