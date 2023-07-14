<?php

namespace App\Http\Controllers\Farms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Farms;

class FarmsController extends Controller
{
    public function index()
    {
      //dd('vic');
      $page = new PagesController();
      $farmers_home_page = $page->farms_page();
      return $farmers_home_page;

    }

    public function store_farm(Request $request){
     //dd($request->hasFile('file'));
      //dd($request);
      Farms::validate($request);
      $farmers = new Farms();
      //dd($request);

      $user_id_in_session = Auth::user()->id;
      //dd($user_id_in_session);

      $farmers->set_user_id($user_id_in_session);
      $farmers->set_avatar('avatar');
      //$name =  $request->input('link');

      $farmers->set_name($request->input('name'));
      $farmers->set_mobile($request->input('mobile'));
      $farmers->set_link($request->input('link'));
      $farmers->set_bio($request->input('bio'));
      $farmers->set_location($request->input('location'));
      $farmers->save();


      if ($request->hasFile('avatar')) {
        $avatar_name = $farmers->get_id().".".$request->file('avatar')->extension();
        Storage::disk('public')->put(
          $avatar_name, file_get_contents($request->file('avatar')->getRealPath())
        );
        $farmers->set_avatar($avatar_name);
        $farmers->save();
      }

      return $this->index();
    }
}
