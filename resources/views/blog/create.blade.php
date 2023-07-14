@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('Create A Blog Post') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/store_blog') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">
                              {{ __('Title') }}
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                name="title"  required autocomplete="title" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3 h-75 ">
                            <label for="content" class="col-md-4 col-form-label text-md-end">
                              {{ __('Content') }}
                            </label>
                            <div class="col-md-6 h-100 w-100 ">
                            <!--  <textarea class="form-control @error('content') is-invalid @enderror"
                                name="content" rows="8" cols="80">
                              </textarea>-->

                            <input id="x" type="hidden" name="content">
                            <trix-editor input="x"></trix-editor>
                          </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="{{ asset('js/trix.umd.min.js') }}"></script>
    <script src="{{ asset('js/attachments.js') }}"></script>
@endsection
