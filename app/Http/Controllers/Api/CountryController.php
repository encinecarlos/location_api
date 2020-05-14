<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\CountryResource;
use App\Repository\CountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    private $countries;

    public function __construct(Country $countries)
    {
        $this->countries = $countries;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return CountryCollection
     */
    public function index(Request $request)
    {
        $countries = $this->countries;

        $countryRepository = new CountryRepository($countries);

        if ($request->has('conditions'))
        {
            $countryRepository->selectConditions($request->get('conditions'));
        }

        if ($request->has('fields'))
        {
            $countryRepository->selectFilter($request->get('fields'));
        }

        return new CountryCollection($countryRepository->getResults()->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = $this->countries;
        $countryRepository = new CountryRepository($country);
        return $countryRepository->saveLocation($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CountryResource
     */
    public function show($id)
    {
        $country = $this->countries->find($id);

        return new CountryResource($country);
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
