@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
  <div class="p-3">
    @foreach(  $viewData["products"] as $product)
     <br>
        @foreach( $viewData["farmers"] as $farmer)
      <h1>
         @if( $farmer->get_id() === $product->get_farmers_id() )

        {{ $product->get_title() }}

      </h1>
      <div class="col-md-6 col-lg-4 mb-4 justify-content-md-center ">
        <img src="{{ asset('/storage/'.$product->get_products_files()) }}"
        class="img-fluid rounded">
      </div>
      <h3>
       <p>

         Location: {{ $farmer->get_location() }}
         <br>
         Contact:  {{ $farmer->get_mobile() }}


         <br>
        <a href="#">about me</a>
        @endif
       </p>

      </h3>
       @endforeach
      <br>
      @endforeach
      <br>

     <h1>
       vikky farm
     </h1>
    <div class="col-md-6 col-lg-4 mb-4 justify-content-md-center ">
      <img src="{{ asset('/img/fish1.jpg') }}" class="img-fluid rounded">
    </div>
    <h3>
     <p>
       Location: number 2 heaven
       <br>
       Contact: 0909099909
       <br>
      <a href="#">about me</a>
     </p>

    </h3>
  </div>
 <div class="p-3">
   <h1>
     lissy farm
   </h1>
   <div class="col-md-6 col-lg-4 mb-4 justify-content-md-center ">
     <img src="{{ asset('/img/fish2.jpg') }}" class="img-fluid rounded">
   </div>
   <h3>
    <p>
      Location: number 2 heaven
      <br>
      Contact: 0909099909
      <br>
     <a href="#">about me</a>
    </p>

   </h3>
 </div>
 <div class="card" style="width: 18rem;">
   <div class="col-md-6 col-lg-4 mb-4 justify-content-md-center">
     <img src="{{ asset('/img/ff.jpg') }}" class="card-img-top img-fluid rounded">
   </div>
 </div>
    Location: number 2 heaven
    <br>
    Contact: 0909099909
    <br>


 </h3>
</div>



<div class="card" style="width: 18rem;">
  <img src="{{ asset('/img/ff.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title
       and make up the bulk of the card's content.</p>
  </div>
</div>


@endsection
