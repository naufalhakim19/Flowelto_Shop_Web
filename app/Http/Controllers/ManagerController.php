<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Flower;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ManagerController extends Controller
{
    public function view(){
        return view('manager');
    }
    public function addFlower(){
        $category = Category::all();
        return view('addFlower')->with('category',$category);
    }
    //untuk menupload data dan image pada bagian manager
    public function adding(Request $request){
        $file = $request->file('image');
        $path = 'asset/';
        $file->move($path, $request->image->getClientOriginalName());
            
        DB::table('flowers')->insert([
            'categoryID' => $request->category,
            'flowerName' => $request->flower_name,
            'flowerPrice' => $request->price,
            'description' => $request->desc,
            'flowerImage' => $request->image->getClientOriginalName()
        ]);
        return Redirect('/home');
    }
    //untuk memlihat semua data category
    public function manageCategories(){
        $category = Category::all();
        return view('manageCategories')->with('category',$category);
    }
    //untuk menupdate data category
    public function manageupdate($categoryID){
        $category = Category::where('id',$categoryID)->first();
        return view('updateCategories')->with('category',$category);
    }
    //untuk menupdate data image category
    public function manageupdateinput(Request $request, $categoryID){
        $file = $request->file('image');
        $path = 'asset/';
        $file->move($path, $request->image->getClientOriginalName());
            
        DB::table('categories')->where('id',$categoryID)->update([
            'categoryName' => $request->name,
            'categoryImage' => $request->image->getClientOriginalName()
        ]);
        return Redirect('/manageCategories');
    }
    //untuk delete data category
    public function managedelete($categoryID){
        DB::table('flowers')->where('categoryID',$categoryID)->delete();
        DB::table('categories')->where('id',$categoryID)->delete();
        return Redirect('/manageCategories');
    }
    public function manageflower($flowerID){
        $category = Category::all();
        $flower = Flower::where('id',$flowerID)->first();
        return view('updateFlower')->with('flower',$flower)->with('category',$category);
    }
    public function manageupdatedflower(Request $request, $flowerID){
        $file = $request->file('image');
        $path = 'asset/';
        $file->move($path, $request->image->getClientOriginalName());
            
        DB::table('flowers')->where('id',$flowerID)->update([
            'categoryID' => $request->category_form,
            'flowerName' => $request->name,
            'flowerPrice' => $request->price,
            'description' => $request->description,
            'flowerImage' => $request->image->getClientOriginalName()
        ]);
        return Redirect('/');
    }
    public function flowerdelete($flowerID){
        DB::table('flowers')->where('id',$flowerID)->delete();
        return Redirect('/');
    }
}