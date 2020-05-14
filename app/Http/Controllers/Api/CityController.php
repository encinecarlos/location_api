<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityCollection;
use App\Http\Resources\CityResource;
use App\Repository\CityRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{
    private $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return CityCollection
     */
    public function index(Request $request)
    {
        $cities = $this->city;
        $cityRepository = new CityRepository($cities);

        if ($request->has('conditions'))
            $cityRepository->selectConditions($request->get('conditions'));

        if ($request->has('fields'))
            $cityRepository->selectFilter($request->get('fields'));

        return new CityCollection($cityRepository->getResults()->paginate(10));

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
     * @return CityResource
     */
    public function show($id)
    {
        $city = $this->city->find($id);
        return new CityResource($city);
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
