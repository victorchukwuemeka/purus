@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
    @foreach( $viewData["farms"] as $farm)
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
          <img src="{{ asset('/storage/'.$farm->get_avatar()) }}"
             class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
             <div class="card-body">
               <div class="card-text">
                 @if( $farm->get_user_id() === $viewData['user_id_in_session'])
                     <a href="{{ url('/create_products') }}">
                     {{ __('Make a post') }}
                     </a>
                 @endif
               </div>
               <h5 class="card-title">
                 {{ $farm->get_mobile() }}
               </h5>
               <p class="card-text"> {{ $farm->get_location() }} </p>
               <p class="card-text"> {{ $farm->get_bio() }} </p>
               <p class="card-text"><small class="text-muted"> {{ $farm->get_name()}} </small></p>
             </div>
          </div>
        </div>
      </div>
      @endforeach

  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('/img/p.jpeg') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>


</div>


</div>
@endsection
