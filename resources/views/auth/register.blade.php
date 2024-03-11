@extends('layouts.app')

@section('css')
<style>
    .help-block, .error-help-block{
        color:red
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('First name') }} <span class="text-danger">*</span></label>

                            <div class="col-md-4">
                                <input id="firstName" placeholder="First name" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autofocus>
                            </div>
                            <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Last name') }} <span class="text-danger">*</span></label>

                            <div class="col-md-4">
                                <input id="lastName" placeholder="Last name" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email') }} <span class="text-danger">*</span></label>

                            <div class="col-md-4">
                                <input id="email" placeholder="Enter email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="aadhar" class="col-md-2 col-form-label text-md-end">{{ __('Aadhar No.') }} <span class="text-danger">*</span></label>
                            <div class="col-md-4">
                                <input id="aadhar" placeholder="Enter aadhar number" type="text" class="form-control @error('aadhar_number') is-invalid @enderror" name="aadhar_number" value="{{ old('aadhar_number') }}" required>

                                @error('aadhar_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="dob" class="col-md-2 col-form-label text-md-end">{{ __('Date of birth') }} <span class="text-danger">*</span></label>

                            <div class="col-md-4">
                                <input id="dob" type="text" placeholder="Date of birth" class="form-control datepicker @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required >

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="gender" class="col-md-2 col-form-label text-md-end">{{ __('Gender') }} <span class="text-danger">*</span></label>

                            <div class="col-md-4">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="">Choose gender...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Password') }} <span class="text-danger">*</span></label>

                            <div class="col-md-4">
                                <input id="password" placeholder="Enter password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <label for="password-confirm" class="col-md-2 col-form-label text-md-end">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>

                                <div class="col-md-4">
                                    <input id="password-confirm" placeholder="Re-enter password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

@section('script')
 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! JsValidator::formRequest('App\Http\Requests\UserRegisterRequest') !!}
@endsection
