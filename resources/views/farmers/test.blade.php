@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="">

   <div class="container py-5 h-100">



        <div class="">
          @foreach( $viewData["farms"] as $farm)

          @if( $farm->get_user_id() === $viewData['user_id_in_session'])
            <p>
              <a href="{{ url('/create_products') }}">
                {{ $viewData["title"] }}
              </a>
             </p>
          @endif

           <br>
           {{ $farm->get_name()}}
           <br>
           {{ $farm->get_bio() }}
           <br>
           {{ $farm->get_mobile() }}
           <br>
           {{ $farm->get_location() }}
           <br>
           <a href="{{ $farmer->get_link()  }}">
                  my site
           </a>

           <br>
           <img src="{{ asset('/storage/'.$farmer->get_avatar()) }}" alt="">

           <br>
           <br>
          @endforeach

        </div>




    <div class="">
      <img src="{{ asset('/img/fff.jpeg') }}" class="">

     <p>
       i farmer with 7years experience in table level fishes
       njjfnf kkfund unegbdd klfllflf oleijdud
     </p>
      <div class="d-flex justify-content-start">
        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i>facebook</a>
        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i>twitter</a>
        <a href="#!"><i class="fab fa-instagram fa-lg"></i>instagram</a>
      </div>

    </div>
     <div class="col-2">
       <img src="{{  }}" class="rounded-circle my-5" style="width: 80px;">
       <h3>chukwuemeka victor</h3>
     </div>
   </div>
</div>


@endsection
