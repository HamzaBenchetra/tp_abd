<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTarifsRequest;
use App\Http\Requests\UpdateTarifsRequest;
use App\Repositories\TarifsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TarifsController extends AppBaseController
{
    /** @var  TarifsRepository */
    private $tarifsRepository;

    public function __construct(TarifsRepository $tarifsRepo)
    {
        $this->tarifsRepository = $tarifsRepo;
    }

    /**
     * Display a listing of the Tarifs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tarifs = $this->tarifsRepository->all();

        return view('tarifs.index')
            ->with('tarifs', $tarifs);
    }

    /**
     * Show the form for creating a new Tarifs.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarifs.create');
    }

    /**
     * Store a newly created Tarifs in storage.
     *
     * @param CreateTarifsRequest $request
     *
     * @return Response
     */
    public function store(CreateTarifsRequest $request)
    {
        $input = $request->all();

        $tarifs = $this->tarifsRepository->create($input);

        Flash::success('Tarifs saved successfully.');

        return redirect(route('tarifs.index'));
    }

    /**
     * Display the specified Tarifs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarifs = $this->tarifsRepository->find($id);

        if (empty($tarifs)) {
            Flash::error('Tarifs not found');

            return redirect(route('tarifs.index'));
        }

        return view('tarifs.show')->with('tarifs', $tarifs);
    }

    /**
     * Show the form for editing the specified Tarifs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarifs = $this->tarifsRepository->find($id);

        if (empty($tarifs)) {
            Flash::error('Tarifs not found');

            return redirect(route('tarifs.index'));
        }

        return view('tarifs.edit')->with('tarifs', $tarifs);
    }

    /**
     * Update the specified Tarifs in storage.
     *
     * @param int $id
     * @param UpdateTarifsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTarifsRequest $request)
    {
        $tarifs = $this->tarifsRepository->find($id);

        if (empty($tarifs)) {
            Flash::error('Tarifs not found');

            return redirect(route('tarifs.index'));
        }

        $tarifs = $this->tarifsRepository->update($request->all(), $id);

        Flash::success('Tarifs updated successfully.');

        return redirect(route('tarifs.index'));
    }

    /**
     * Remove the specified Tarifs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarifs = $this->tarifsRepository->find($id);

        if (empty($tarifs)) {
            Flash::error('Tarifs not found');

            return redirect(route('tarifs.index'));
        }

        $this->tarifsRepository->delete($id);

        Flash::success('Tarifs deleted successfully.');

        return redirect(route('tarifs.index'));
    }
}
