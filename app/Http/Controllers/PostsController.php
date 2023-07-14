<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use App\Models\Comments;



class PostsController extends Controller
{


    public function index(){
      $pages = new PagesController();
      $blog_page = $pages->blog();
      return $blog_page;
    }

    public function create(){
      $viewData =[];
      $viewData['title'] = "Topic To Write About";
      return view('blog.create')->with('viewData', $viewData);
    }

    public function store(Request $request){
       Posts::validate($request);
       $blog_post = new Posts();
       $title = $request->input('title');
       $content = $request->input('content');
       $user_id = $user_id_in_session = Auth::id();

       $blog_post->set_title($title);
       $blog_post->set_content($content);
       $blog_post->set_user_id($user_id);
       $blog_post->save();
       return $this->index();
    }



    public function show($id){

      $comments = Comments::paginate(15)->sortDesc();

      $post = Posts::findOrFail($id);


      $viewData = [];

      $viewData['id'] = $id;
      $viewData['title'] = $post->get_title();
      $viewData['content'] =  chunk_split($post->get_content());
      $viewData['comments'] = $comments;



      return view('blog.show')->with('viewData', $viewData);
    }

    public function delete($id){
      Posts::destroy($id);
      return back();
    }

}
