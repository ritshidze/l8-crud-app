@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-subtitle mb-2 text-muted">{{$card}}</h3>
            <hr />
            @include('partials.flash-messages')
            
                <div class="form-group row">
                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                    <div class="col-md-6">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" value="{{ $employee->first_name }}" required autocomplete="first_name" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                    <div class="col-md-6">
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ $employee->last_name }}" required autocomplete="last_name" autofocus>

                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $employee->email }}" required autocomplete="email">
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror"
                            name="phone_number" maxlength="10" size="10" value="{{ $employee->phone_number }}" required autocomplete="phone_number" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Companie') }}</label>

                    <div class="col-md-6">
                        <span>{{$employee->name}}</span><br/>
                        <img src="{{asset('storage/'.$employee->logo)}}" width="100" height="100">
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