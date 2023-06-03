<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Farms;
use App\Models\Products;




class HomeController extends Controller
{

  public function index(){
    $farms = Farms::paginate(15)->sortDesc();
    $products = Products::paginate(15)->sortDesc();

    $count = $farms->count();
    //dd($count);
    $id = [];
    for ($i=0; $i <= $count ; $i++) {
      foreach ($farms as $farm) {
       $id[] = $farm->get_id();
      }
    }


    $viewData = [];
    $viewData["farms"] =  $farms;
    $viewData["products"] = $products;
    $id = $viewData["id"] = $id;

    //dd($id);
    //dd($product->get_farmers_id());

    $viewData["title"] = "Home Page - FarmCo";
    return view('home.c')->with("viewData", $viewData);
  }

  public function about(){
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Your Name";

    return view('home.about')->with("title", $data1)
    ->with("subtitle", $data2)
    ->with("description", $description)
    ->with("author", $author);
  }

  public function create_a_farm(){
    $viewData = [];
    $viewData['title'] = "create a farmers account";
    // dd($viewData);
    return view('home.create_a_farm')->with("viewData", $viewData);
  }

  public function farms_page(){
    $farms = Farms::all();
    $viewData = [];
    $viewData['title'] = "Make A Post";
    $viewData['farms'] = $farms;
    $viewData["user_id_in_session"] = $user_id_in_session = Auth::id();
    return view('farmers.index')->with('viewData', $viewData);
  }



}
