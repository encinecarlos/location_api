<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateCollection;
use App\Http\Resources\StateResource;
use App\Repository\StateRepository;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    private $states;

    public function __construct(State $state)
    {
        $this->states = $state;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return StateCollection
     */
    public function index(Request $request)
    {
        $states = $this->states;

        $stateRepository = new StateRepository($states);
        if ($request->has('conditions'))
        {
            $stateRepository->selectConditions($request->get('conditions'));
        }

        if ($request->has('fields'))
        {
            $stateRepository->selectFilter($request->get('fields'));
        }

        return new StateCollection($stateRepository->getResults()->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return StateResource
     */
    public function show($id)
    {
        $state = $this->states->find($id);
        return new StateResource($state);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
