<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateModeLocationRequest;
use App\Http\Requests\UpdateModeLocationRequest;
use App\Repositories\ModeLocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ModeLocationController extends AppBaseController
{
    /** @var  ModeLocationRepository */
    private $modeLocationRepository;

    public function __construct(ModeLocationRepository $modeLocationRepo)
    {
        $this->modeLocationRepository = $modeLocationRepo;
    }

    /**
     * Display a listing of the ModeLocation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $modeLocations = $this->modeLocationRepository->all();

        return view('mode_locations.index')
            ->with('modeLocations', $modeLocations);
    }

    /**
     * Show the form for creating a new ModeLocation.
     *
     * @return Response
     */
    public function create()
    {
        return view('mode_locations.create');
    }

    /**
     * Store a newly created ModeLocation in storage.
     *
     * @param CreateModeLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateModeLocationRequest $request)
    {
        $input = $request->all();

        $modeLocation = $this->modeLocationRepository->create($input);

        Flash::success('Mode Location saved successfully.');

        return redirect(route('modeLocations.index'));
    }

    /**
     * Display the specified ModeLocation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modeLocation = $this->modeLocationRepository->find($id);

        if (empty($modeLocation)) {
            Flash::error('Mode Location not found');

            return redirect(route('modeLocations.index'));
        }

        return view('mode_locations.show')->with('modeLocation', $modeLocation);
    }

    /**
     * Show the form for editing the specified ModeLocation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modeLocation = $this->modeLocationRepository->find($id);

        if (empty($modeLocation)) {
            Flash::error('Mode Location not found');

            return redirect(route('modeLocations.index'));
        }

        return view('mode_locations.edit')->with('modeLocation', $modeLocation);
    }

    /**
     * Update the specified ModeLocation in storage.
     *
     * @param int $id
     * @param UpdateModeLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModeLocationRequest $request)
    {
        $modeLocation = $this->modeLocationRepository->find($id);

        if (empty($modeLocation)) {
            Flash::error('Mode Location not found');

            return redirect(route('modeLocations.index'));
        }

        $modeLocation = $this->modeLocationRepository->update($request->all(), $id);

        Flash::success('Mode Location updated successfully.');

        return redirect(route('modeLocations.index'));
    }

    /**
     * Remove the specified ModeLocation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modeLocation = $this->modeLocationRepository->find($id);

        if (empty($modeLocation)) {
            Flash::error('Mode Location not found');

            return redirect(route('modeLocations.index'));
        }

        $this->modeLocationRepository->delete($id);

        Flash::success('Mode Location deleted successfully.');

        return redirect(route('modeLocations.index'));
    }
}
