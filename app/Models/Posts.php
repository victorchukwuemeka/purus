<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Posts extends Model
{
    use HasFactory;

    /**
    *Attributes of the post class
    */

    public function set_id($id){
      $this->attributes['id'] = $id;
    }

    public function get_id(){
      return $this->attributes['id'];
    }

    public function set_title($title){
      $this->attributes['title'] = $title;
    }

    public function get_title(){
      return $this->attributes['title'];
    }

    public function set_content($content){
      $this->attributes['content'] = $content;
    }

    public function get_content(){
      return $this->attributes['content'];
    }

    public function set_user_id($user_id){
      $this->attributes['user_id'] = $user_id;
    }

    public function get_user_id(){
      return $this->attributes['user_id'];
    }

    /*validation*/
    public static function validate($request){
      $request->validate([
        'title' => ['required', 'unique:posts', 'max:255'],
        'content' => ['required'],
      ]);
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }




}
