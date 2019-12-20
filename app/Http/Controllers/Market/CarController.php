<?php

namespace App\Http\Controllers\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cars;
use App\Cars2;
use App\Http\Requests\CarRequest;
use Illuminate\Routing\Redirector;

class CarController extends Controller
{
  
    private $lastCarId;
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
       return view('market/market/sell');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {     
          $car =   Cars::create([
               'user_id' =>   1, 
               'title' =>   $request->title, 
               'brand_id' =>   1, 
               'model_id' =>   1, 
                'cc' =>  $request->cc, 
                'city_id' =>   1, 
                'kilometers' =>    $request->kilometers, 
                'driver' =>    $request->driver, 
                'fuel' =>    $request->fuel, 
               'color' =>     $request->color, 
               'price' =>     $request->price, 
               'description' =>   $request->details, 
               'slug' =>   'first-car'. random_int(100, 200),
             ]);   
         $lastCar = $car->id;
         $this->lastCarId = $lastCar;
      return view('market/market/sell2');

       

    }

    public function store2(Request $request)
    {   
       dd($request);
        foreach ($request->file() as $files) {
             $i = 1;

            if($request->file('image'.$i)){
            $image_name = rand() .'.'.$files->getClientOriginalExtension();
            $files->move(public_path('market/images/cars'), $image_name);
            $image[] = 'market/images/cars/' . $image_name;
            }
            $i++;
        }
        $images_string = implode(',', $image);
        
        Cars2::insert([
            'car_id' => $request->carId,
            'image' => $images_string,
            'comfort' => 'ay 7aga',
            'windows' => 'ay 7aga',
            'sounds' => 'ay 7aga',
            'safe' => 'ay 7aga',
            'other_future' => 'ay 7aga',
        ]);
        return back();

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
