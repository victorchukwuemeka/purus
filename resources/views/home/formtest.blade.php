@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')

<form class="" action="{{ url('/store_farm') }}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="">
    <label for="avatar">upload</label>
   <input type="file" id="file" name="avatar" multiple />
  </div>
   <div class="">
     <label for="text">name</label>
     <input type="text" name="name" value="">
   </div>
   <div class="">
     <label for="mobile">mobile</label>
     <input type="mobile" name="mobile" value="">
   </div>
   <div class="">
     <label for="url">other links</label>
     <input type="url" name="link" value="" pattern="https://.*" required>
   </div>
   <div class="">
     <label for="textarea">description</label>
     <textarea name="bio" rows="8" cols="80"></textarea>
   </div>
   <div class="">
     <label for="">location</label>
     <input type="text" name="location" value="">
   </div>
   <button type="submit" name="button"> summit</button>

</form>

@endsection
