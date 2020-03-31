<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cars;
use App\Cars2;
use App\Brand;
use App\CarsModel;
use App\City;
use DB;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
      $brands = Brand::get();
       $models = CarsModel::get();
       $cities = City::get();
       $drivers = DB::table('drivers')->get();
       $modelyear = DB::table('ModelYears')->orderBy('year', 'desc')->get();

  $cars = Cars::where('brand_id', $request->brand)->
               orWhere('city_id', $request->city)->
               orWhere('driver_id', $request->driver)->
               orWhereBetween('price', [$request->salaryFrom, $request->salaryTo])->
               orWhereBetween('modelyear_id', [$request->yearFrom ,$request->yearTo])

        ->get();     
       return view('market/search' ,compact(['cars', 'brands', 'models', 'cities', 'cars', 'drivers', 'modelyear']));
    }



    public function model_ajax(Request $request)
    {

        if($request->brand_id){
            $model = CarsModel::where('brand_id', $request->brand_id)->get();
            return $model;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
