<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function showcarlists(){
        $cars = Car::orderBy('created_at', 'desc')->with('category')->paginate('3');
        //dd($cars);
        return view('Cars.carsListView', compact('cars'));
    }

    public function show($id){
        $cars = Car::find($id);
        $car = Car::find($id)->with('category')->where('category_id', $cars->category_id)->whereNotIn('id', [$id])->latest()->take(3)->get();
        return view('Cars.carDetailsView', compact("id","cars", "car"));    
    }

    public function addcar(){
        $categories = Category::all();
        return view('Cars.addCarsView', compact('categories'));
    }
    
    public function sendcaradd(Request $request){
        $validation =  $request->validate([
             'image' => "required",
             'name' => "required",
             'price' => "required",
             'details' => "required",
             'category_id' => "required"
         ]);
 
 
         if($request->image[0]){
             $mainly_picture = Storage::disk()->put('mainly_pictures',$request->image[0]);
         };
 
         if($request->image[1]){
             $secondary_picture = Storage::disk()->put('secondary_pictures',$request->image[1]);
         };
 
         if($request->image[2]){
             $tertiary_picture = Storage::disk()->put('tertiary_pictures',$request->image[2]);
         };
 
         //dd($picture);
         $save = Car::create([
             'mainly_image' => $mainly_picture,
             'secondary_image' =>  $secondary_picture,
             'tertiary_image' => $tertiary_picture,
             'name' => $request->name,
             'price' => $request->price,
             'details' => $request->details,
             'category_id' => $request->category_id 
         ]) ;

         //dd($request);
     
         return redirect()->route('showCarLists')->with('message', 'Voiture ajoutée avec sucèss');
     }
}