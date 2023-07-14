<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Farms;
use App\Models\Products;
use App\Models\Posts;


class PagesController extends Controller
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

    $viewData["title"] = "Home Page - Purus";
    return view('home.i')->with("viewData", $viewData);
  }

  public function blog(){
    $data1 = "You are welcome";
    $data2 = "Make A Blog Post";
    $description = "POST";
    $author = "victor";

    $posts = Posts::paginate(15)->sortDesc();



    $viewData = [];
    $viewData['data1'] = $data1;
    $viewData['data2'] = $data2;
    $viewData['description'] = $description;
    $viewData['author'] = $author;
    $viewData["user_id_in_session"] = $user_id_in_session = Auth::id();
    $viewData['posts'] = $posts;

    return view('home.blog')->with('viewData', $viewData);
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
