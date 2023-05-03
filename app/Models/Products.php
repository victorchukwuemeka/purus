<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Farmers;

class Products extends Model
{
    use HasFactory;

    /**
    * validation function for he request
    */
     public static function validate($request)
     {
       $request->validate([
       'title' => 'required|max:255',
       'products_files' => 'required',
       ]);
     }

    /*
     attributes
    */

     public function set_id($id)
     {
       $this->attributes['id'] = $id;
     }

     public function get_id()
     {
       return $this->attributes['id'];
     }

     public function set_title($title)
     {
       $this->attributes['title'] = $title;
     }

     public function get_title()
     {
       return $this->attributes['title'];
     }

     public function set_products_files($products_files)
     {
       $this->attributes['products_files'] = $products_files;
     }

     public function get_products_files()
     {
       return $this->attributes['products_files'];
     }


     public function set_farms_id($farmers_id)
     {
       $this->attributes['farms_id'] = $farmers_id;
     }

     public function get_farms_id()
     {
       return $this->attributes['farms_id'];
     }

     /* get the farm that ownes the products */
     public function farmers()
     {
       return $this->belongsTo(Farmers::class, 'foreign_key');
     }
}
