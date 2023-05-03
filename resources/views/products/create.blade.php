@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')



    <form action="{{ url('/store_products')}}" id='file-catcher' method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="">
        <label for="title">title</label>
        <input type="text" id="title"  name="title" value="">
        @error('title')
        <strong>{{ $message }}</strong>
        @enderror
      </div>

      <div class="">
        <label for="products_files">upload files</label>
        <input type="file" id="input" name="products_files" accept="image/*" multiple>
        @error('file')
        <strong>{{ $message }}</strong>
        @enderror
      </div>


       <input type="submit" class="btn btn-primary" value="Upload"/>

    </form>
    <script>

    /*  var inputElement = document.getElementById('input');
      var fileList = [];

      fileInput.addEventListener('change', function (evnt) {
        fileList = [];
        for (var i = 0; i < fileInput.files.length; i++) {
          fileList.push(fileInput.files[i]);
        }
      });*/


  /*  var fileCatcher = document.getElementById('file-catcher');
    fileCatcher.addEventListener('submit', function (evnt) {
      evnt.preventDefault();
      fileList.forEach(function (file) {
        sendFile(file);
      });
    }); */

      //inputElement.addEventListener("change", handleFiles, false);
      /*function handleFiles() {
        const fileList = this.files;
        const numFiles = fileList.length;
        for (var i = 0; i < numFiles; i++) {
          const file = fileList[i];
        }
      }*/


    </script>

@endsection
