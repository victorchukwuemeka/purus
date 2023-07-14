<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    // attributes of the comments model

    public function set_id($id)
    {
        $this->attributes['id'] = $id;
    }

    public function get_id(){
        return $this->attributes['id'];
    }

    public function set_post_id($post_id)
    {
        $this->attributes['post_id'] = $post_id;
    }

    public function get_post_id(){
        return $this->attributes['post_id'];
    }

    public function set_user_id($user_id){
        $this->attributes['user_id'] = $user_id;
    }

    public function get_users_id(){
        return $this->attributes['users_id'];
    }

    public function set_comment($comment){
        $this->attributes['comment'] = $comment;
    }

    public function get_comment(){
        return $this->attributes['comment'];
    }

    public function posts(){
        return $this->belongsTo(Posts::class);
    }

   
}



