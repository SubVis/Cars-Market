<?php

namespace App\Http\Controllers\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use App\Brand;
use App\CarsModel;
use App\City;
use DB;
class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cars =  car::paginate(4);
       $brands = Brand::paginate(12);
       $models = CarsModel::get();
       $cities = City::get();
       $drivers = DB::table('drivers')->get();
       $modelyear = DB::table('ModelYears')->orderBy('year', 'desc')->get();
     
       return view('market/buy', compact(['brands', 'models', 'cities', 'cars', 'drivers', 'modelyear']));
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
       
        $car = Car::where('id', $id)->first();
        $relate_cars =  Car::whereBetween('price', [$car->price - 1000, $car->price + 1000])->get();
        
        return view('market/product', ['car'=>$car, 'relate_cars'=>$relate_cars ]);
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
