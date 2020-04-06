<?php

namespace App\Http\Controllers\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use App\Cars2;
use App\Brand;
use App\CarsModel;
use App\City;
use App\Http\Requests\CarRequest;
use App\Http\Requests\CarFrom1Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CarController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(public_path('market/images/cars'));
        $brands = Brand::get();
        $models = CarsModel::get();
        $cities = City::get();
        $colors = DB::table('colors')->get();
        $fuels = DB::table('fuels')->get();
        $drivers = DB::table('drivers')->get();
        $modelyear = DB::table('ModelYears')->orderBy('year', 'desc')->get();
       return view('market/sell', compact(['brands', 'models', 'cities', 'colors', 'fuels', 'drivers', 'modelyear']));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarFrom1Request $request)
    {     
        
   
         //  $car =   Cars::create([
         //       'user_id' =>   1, 
         //       'title' =>   $request->title, 
         //       'brand_id' =>   1, 
         //       'model_id' =>   1, 
         //        'cc' =>  $request->cc, 
         //        'city_id' =>   1, 
         //        'kilometers' =>    $request->kilometers, 
         //        'driver' =>    $request->driver, 
         //        'fuel' =>    $request->fuel, 
         //       'color' =>     $request->color, 
         //       'price' =>     $request->price, 
         //       'description' =>   $request->details, 
         //       'slug' =>   'first-car'. random_int(100, 2000),
         //     ]);   
         // $lastCar = $car->id;
         // $this->lastCarId = $lastCar;
      return ;


       

    }

    public function store2(CarRequest $request)
    {   

         foreach ($request->file() as $files) {
             $i = 1;

            if($request->file('image'.$i)){
            $image_name = rand() .'.'.$files->getClientOriginalExtension();
            $files->move(public_path('storage/cars/' .date('FY')), $image_name);
            $image[] = 'storage/cars/' . date('FY').'/'.$image_name;
            }
            $i++;
        }
       $images_string = implode(',', $image);
       $request->windows ? $windows = implode(',',$request->windows) : $windows =null;
       $request->comfort ? $comfort = implode(',',$request->comfort) : $comfort = null;
       $request->soundSys ? $soundSys = implode(',',$request->soundSys):$soundSys =null ;
       $request->security ? $security= implode(',',$request->security):$security =null;
       $request->others ? $others= implode(',',$request->others):$others = null  ;

       $car =   Car::create([
           'user_id' =>   Auth::user()->id, 
           'title' =>   $request->title, 
            'brand_id' =>    $request->brand, 
            'model_id' =>   $request->model, 
            'modelyear_id' =>    $request->modelyear,
            'city_id' =>   $request->city, 
             'cc' =>  $request->cc, 
           
             'kilometers' =>    $request->kilometers, 
             'driver_id' =>    $request->driver, 
             'fuel_id' =>    $request->fuel, 
              
            'color_id' =>     $request->color, 
            'price' =>     $request->price, 
           'description' =>   $request->details,
            'image' => $images_string,
            'comfort' => $comfort,
            'windows' => $windows,
            'sounds' => $soundSys,
            'safe' => $security,
            'other_future' => $others,


            ]);

       
       
        return route('car/show', ['id' =>$car->id]);
     /*
      Equipment::create([
        'car_id' =>$request->carId,
        'comfort'=> $request->comfort,
        'window'=> $request->window,
        'sound'=> $request->sound,
        'safe'=> $request->safe,
        'other'=> $request->other,
      ]);
        foreach($request->sell1 as $sell) {
           dd($sell1);
        };
        dd([$request]);
       $car = [
        $request->title, 
        $request->brand, 
        $request->model, 
        $request->cc, 
        $request->city, 
        $request->kilometers, 
        $request->driver, 
        $request->fuel, 
        $request->color, 
        $request->price, 
        $request->details, 
        /*
        $request->file('photo1'), 
        $request->file('photo2'), 
        $request->file('photo3'), 
        $request->file('photo4'), 
        $request->file('photo5'), 
        $request->file('photo6') ];
        dd($car);
        */
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = where('id', $id)->first();

        return view('market/buy', ['car'=>$car]);
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
