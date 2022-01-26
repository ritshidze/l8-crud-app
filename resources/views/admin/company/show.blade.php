@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ $company->name }}" required autocomplete="name" autofocus>
                </div>
            </div>
            

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $company->email }}" required autocomplete="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                <div class="col-md-6">
                    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror"
                        name="website" value="{{ $company->website }}" required autocomplete="website" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                <div class="col-md-6">
                    <img src="{{asset('storage/'.$company->logo)}}" width="100" height="100">
                </div>
            </div>

        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small" href="#"></a>
            <div class="small float-right"><i class="fas fa-user"></i></div>
        </div>
    </div>
</div>
@endsection