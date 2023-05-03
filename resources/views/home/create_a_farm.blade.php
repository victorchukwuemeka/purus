@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create A Farm Page') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/store_farm') }}" enctype="multipart/form-data">
                        @csrf

                         <div class="row mb-3">
                           <label for="avatar" class="col-md-4 col-form-label text-md-end">{{__('Upload')}}</label>
                           <div class="col-md-6">
                             <input type="file" id="file" class="form-control @error('avatar') is-invalid @enderror"
                             name="avatar" multiple/>
                             @error('avatar')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                           </div>

                         </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name"  required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="url" class="col-md-4 col-form-label text-md-end">{{ __('Link') }}</label>
                            <div class="col-md-6">
                                <input id="url" type="url" pattern="https://.*"
                                 class="form-control @error('url') is-invalid @enderror" name="link" required>
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                              <textarea class="form-control @error('bio') is-invalid @enderror"name="bio" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                          <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location')}}</label>
                          <div class="col-md-6">
                            <input type="text"class="form-control @error('location') is-invalid @enderror" name="location" value="">
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
