@extends('layouts.app')
@section('content')
<div class="">
 @if($viewData['user_id_in_session'])
  <a href="{{ url('/create_blog')}}">
  <i class="fa-solid fa-pen-to-square"></i>
  </a>
@endif
</div>

<!--<div class="container" style="background-color: white">-->

    <div class="row row-cols-1 row-cols-md-3 g-4">
          @foreach( $viewData['posts'] as $post)
          <div class="col">
            <div class="card">
              <a href="{{ url('/blog_show/'.$post->get_id())}}" class="link-secondary">
                <img src="{{ asset('/img/fish2.jpg') }}" class="card-img-top img-fluid rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                       {{ $post->get_title() }}

                    </h5>

                </div>
              </a>
              @if($viewData["user_id_in_session"] === $post->get_user_id())
              <form class="" action="{{ ('/blog_delete/'.$post->get_id()) }}" method="POST">
                @csrf
                @method('DELETE')
              
                <i class="fa-solid fa-trash-can"></i>
                
              </form>
              @endif
              
            </div>
          </div>
          @endforeach
    </div>

<!--</div>-->
@endsection
