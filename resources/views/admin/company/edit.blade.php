@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />
            @include('partials.flash-messages')
            <form method="POST" action="{{ route('update-company') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $company->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $company->email }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                    <div class="col-md-6">
                        <input id="website" type="text" class="form-control @error('website') is-invalid @enderror"
                            name="website" value="{{ $company->website }}" required autocomplete="website" autofocus>

                        @error('website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                    <div class="col-md-6">

                        <img src="{{asset('storage/'.$company->logo)}}" width="100" height="100">
                        <br/>
                        <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror"
                            name="logo" value="{{ $company->logo }}" required autocomplete="logo" autofocus>

                        @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <input type="hidden" name="id" value="{{$company->id}}">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small" href="#"></a>
            <div class="small float-right"><i class="fas fa-user"></i></div>
        </div>
    </div>
</div>
@endsection