<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the cities.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

        return view('cities.index', compact('cities'));
    }

    /**
     * Show the step One Form for creating a new city.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $city = $request->session()->get('city');

        return view('cities.create-step-one', compact('city'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'city_name' => 'required|unique:cities',
            'uf' => 'required|string',
            'zip_code' => 'required|string',
            'population' => 'required|string'
        ]);

        if(empty($request->session()->get('city'))){
            $city = new City();
            $city->fill($validatedData);
            $request->session()->put('city', $city);
        } else {
            $city = $request->session()->get('city');
            $city->fill($validatedData);
            $request->session()->put('city', $city);
        }

        return redirect()->route('cities.create.step.two');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $city = $request->session()->get('city');

        return view('cities.create-step-two',compact('city'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'region' => 'required|string',
            'country' => 'required',
            'description' => 'required',
            'yearFoundation' => 'required|numeric'
        ]);

        $city = $request->session()->get('city');
        $city->fill($validatedData);
        $request->session()->put('city', $city);

        return redirect()->route('cities.create.step.three');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $city = $request->session()->get('city');

        return view('cities.create-step-three', compact('city'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $city = $request->session()->get('city');
        $city->save();

        $request->session()->forget('city');

        return redirect()->route('cities.index');
    }
}
