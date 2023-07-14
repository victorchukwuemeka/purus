<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Farms;

class ProductsController extends Controller
{
    public function index()
    {
      $home = new PagesController();
      return $home->index();
    }

    public function create()
    {
      $viewData =[];
      $viewData['title'] = "Post Your Products";
      return view('products.create')->with('viewData', $viewData);
    }

   public function farms_id()
   {
     $farms_id = 0;
     $farms  = Farms::all();
     //dd(count($farmers));
     foreach ($farms as $farm) {
       $farms_id =   $farm->get_id();
     }

     return $farms_id;
    }


    public function store_products(Request $request)
    {
         //dd($request->all());
         Products::validate($request);
         //dd('viic');
         $products = new Products();
         //dd($request->hasFile('products_files'));

         $title  = $request->input('title');
         $products_files = "products_files";
         $user_id_in_session = Auth::user()->id;

         //dd($products->farmers());
         $farms  = Farms::all('user_id');
         $lenght = count($farms);

         for ($i=0; $i < $lenght; $i++) {
           foreach ($farms as $farm) {
             if ($farm->get_user_id() === $user_id_in_session) {
                $farms_id = $this->farms_id();
             }
           }
         }



         $products->set_title($title);
         $products->set_products_files($products_files);
         $products->set_farms_id($farms_id);
         $products->save();


         if ($request->hasFile('products_files')) {
               $product_file_name = $products->get_id().".".$request->file('products_files')->extension();
               Storage::disk('image')->put(
                 $product_file_name, file_get_contents($request->file('products_files')->getRealPath())
               );
               $products->set_products_files($product_file_name);
               $products->save();
         }


        $home = new PagesController();
        $farms_home_page = $home->farms_page();
        return $farms_home_page;
    }

}
