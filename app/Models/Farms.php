<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;


class Farms extends Model
{
    use HasFactory;
     /*
     * Farmers attributes
     */

     public function set_id($id)
     {
        $this->attributes['id'] = $id;
     }
     public function get_id()
     {
       return $this->attributes['id'];
     }

     public function set_name($name)
     {
       $this->attributes['name'] = $name;
     }

     public function get_name()
     {
       return $this->attributes['name'];
     }

     public function set_bio($bio)
     {
       $this->attributes['bio'] = $bio;
     }

     public function get_bio()
     {
       return $this->attributes['bio'];
     }

     public function set_mobile($mobile)
     {
       $this->attributes['mobile'] = $mobile;
     }

     public function get_mobile()
     {
       return $this->attributes['mobile'];
     }

     public function set_avatar($avatar)
     {
       $this->attributes['avatar'] = $avatar;
     }

     public function get_avatar()
     {
       return $this->attributes['avatar'];
     }

     public function set_link($link)
     {
       $this->attributes['link'] = $link;
     }

     public function get_link()
     {
       return $this->attributes['link'];
     }

     public function set_user_id($user_id)
     {
       $this->attributes['user_id'] = $user_id;
     }

     public function get_user_id()
     {
       return $this->attributes['user_id'];
     }

     public function set_location($location)
     {
       $this->attributes['location'] = $location;
     }

     public function get_location()
     {
       return $this->attributes['location'];
     }

    public static function validate($request)
    {
       $request->validate([
         'name' => 'required|max:255',
          'avatar' => 'required',
         'bio' => 'required|min:3|max:1000',
         'mobile' => 'required|min:8|max:11',
         'link' => 'required',
         'location' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/'
       ]);

     }

     public function products()
     {
       return $this->hasMany(Products::class);
     }

}
