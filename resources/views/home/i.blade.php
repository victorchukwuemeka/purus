@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="row   row-cols-1 row-cols-md-3 g-3">
  @foreach(  $viewData["products"] as $product)
  @foreach( $viewData["farms"] as $farm)
  @if( $farm->get_id() === $product->get_farms_id() )
  <div class="col">
    <div class="card text-dark bg-light">

           <div class="card-header">  {{ $product->get_title() }} </div>
           <div class="card-body">
             <div class="ratio ratio-1x1">
               <img src="{{ asset('/image/'.$product->get_products_files()) }}"
               class="card-img-top img-fluid rounded" alt="card image">
             </div>
             <h5 class="card-title">Location: {{ $farm->get_location() }}</h5>
             <p class="card-text">Contact:  {{ $farm->get_mobile() }} </p>
             <a href="{{ $farm->get_link()}}" class="btn btn-primary">socials</a>
           </div>
    </div>
  </div>
    @endif
   @endforeach
  @endforeach
 <div class="col">
    <div class="card">
      <div class="card-header">Header</div>
      <div class="card-body">
        <img src="{{ asset('/img/fish2.jpg') }}" class="card-img-top img-fluid rounded" alt="...">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

@endsection
