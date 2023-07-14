@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')



    <form  class="container" action="{{ url('/store_products')}}" id='file-catcher' method="post" enctype="multipart/form-data">
      {{csrf_field()}}
     <center>
      <div class="image-upload">
        <!--<label class="" for="products_files">-->
        <div class="">
          <span>
              <i class="fa fa-cloud-upload"></i>
          </span>
        </div>

         <input type="file" id="input" class="upload-input" name="products_files" accept="image/*"  multiple>


      <!--</label>-->

        @error('file')
        <strong>{{ $message }}</strong>
        @enderror
      </div>

      <div class="">

        <label for="title">title</label>
        <input type="text" id="title"  name="title" value="">
        @error('title')
        <strong>{{ $message }}</strong>
        @enderror

      </div>


       <div class="">
         <input type="submit" class="btn btn-primary" value="Upload"/>
       </div>
     </center>

    </form>
  
@endsection
