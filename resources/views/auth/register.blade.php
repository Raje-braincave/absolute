@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/register_save') }}">
                            @csrf

                            {{-- <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group col-6 text-start">
                                <label for="message-text" class="col-form-label">
                                    First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="first_name">
                            </div>
                            <div class="form-group col-6 text-start">
                                <label for="message-text" class="col-form-label">
                                    Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                            </div>
                            <div class="form-group col-6 text-start">
                                <label for="message-text" class="col-form-label">
                                    Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone">
                            </div>
                            <div class="form-group col-6 text-start">
                                <label for="message-text" class="col-form-label">
                                    Gender</label>
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female

                            </div>
                            <div class="form-group col-6 text-start">
                                <label for="message-text" class="col-form-label">
                                    Address</label>
                                <input type="text" class="form-control" placeholder="Addree" name="address">
                            </div>
                            <div class="form-group col-6 text-start">
                                <label for="message-text" class="col-form-label">
                                    Image</label>
                                <input type="file" class="form-control" placeholder="" name="image">
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for=""
                                    class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <select data-placeholder="Select your Role" class="select form-control" id=""
                                        name="role" value="">
                                        <option value="">select</option>
                                        {{-- @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>  
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
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
