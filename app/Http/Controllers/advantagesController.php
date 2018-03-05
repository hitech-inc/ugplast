<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateadvantagesRequest;
use App\Http\Requests\UpdateadvantagesRequest;
use App\Repositories\advantagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class advantagesController extends AppBaseController
{
    /** @var  advantagesRepository */
    private $advantagesRepository;

    public function __construct(advantagesRepository $advantagesRepo)
    {
        $this->advantagesRepository = $advantagesRepo;
    }

    /**
     * Display a listing of the advantages.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->advantagesRepository->pushCriteria(new RequestCriteria($request));
        $advantages = $this->advantagesRepository->all();

        return view('advantages.index')
            ->with('advantages', $advantages);
    }

    /**
     * Show the form for creating a new advantages.
     *
     * @return Response
     */
    public function create()
    {
        return view('advantages.create');
    }

    /**
     * Store a newly created advantages in storage.
     *
     * @param CreateadvantagesRequest $request
     *
     * @return Response
     */
    public function store(CreateadvantagesRequest $request)
    {
        $input = $request->all();

        $advantages = $this->advantagesRepository->create($input);

        Flash::success('Advantages saved successfully.');

        return redirect(route('advantages.index'));
    }

    /**
     * Display the specified advantages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advantages = $this->advantagesRepository->findWithoutFail($id);

        if (empty($advantages)) {
            Flash::error('Advantages not found');

            return redirect(route('advantages.index'));
        }

        return view('advantages.show')->with('advantages', $advantages);
    }

    /**
     * Show the form for editing the specified advantages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $advantages = $this->advantagesRepository->findWithoutFail($id);

        if (empty($advantages)) {
            Flash::error('Advantages not found');

            return redirect(route('advantages.index'));
        }

        return view('advantages.edit')->with('advantages', $advantages);
    }

    /**
     * Update the specified advantages in storage.
     *
     * @param  int              $id
     * @param UpdateadvantagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadvantagesRequest $request)
    {
        $advantages = $this->advantagesRepository->findWithoutFail($id);

        if (empty($advantages)) {
            Flash::error('Advantages not found');

            return redirect(route('advantages.index'));
        }

        $advantages = $this->advantagesRepository->update($request->all(), $id);

        Flash::success('Advantages updated successfully.');

        return redirect(route('advantages.index'));
    }

    /**
     * Remove the specified advantages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advantages = $this->advantagesRepository->findWithoutFail($id);

        if (empty($advantages)) {
            Flash::error('Advantages not found');

            return redirect(route('advantages.index'));
        }

        $this->advantagesRepository->delete($id);

        Flash::success('Advantages deleted successfully.');

        return redirect(route('advantages.index'));
    }
}
