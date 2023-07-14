<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Request $request){
        //dd($request);
        $comments = new Comments();
        $post_id = $request->input('post_id');
        $user_id = $user_id_in_session = Auth::id();
        $comment = $request->input('comment');

        $comments->set_post_id($post_id);
        $comments->set_user_id($user_id);
        $comments->set_comment($comment);

        $comments->save();
        return back();
    }
}
