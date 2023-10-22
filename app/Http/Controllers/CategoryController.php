<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function categoryList(){
    //     $category = Category::all();
    //     dd($category);
    //     return view('Categories.addCategoriesView', compact('category'));
    // }

    public function addcategory(){
        $category = Category::all();
        //dd($category);
        return view('Categories.addCategoriesView', compact('category'));
    }

    public function showcategory($id){
        $category=Category::find($id);
        $cars = Car::where('category_id', $id)->paginate(10);
        //dd($cars);
        return view('Categories.showCategoriesView', compact("category","id", "cars" ));
     }

    public function createCategory(Request $request){  
        $request->validate([
            'name'=> "required"
        ]);

        $category = Category::where('name',$request->name)->first();
        if($category){
            return redirect()->back()->with('error', "Category already exist");
        }

        //dd($request->name);
        $save = Category::create([
            'name'=> $request->name
        ]);
        
        return redirect()->back()->with('message', "Category successfully added");
    }

}