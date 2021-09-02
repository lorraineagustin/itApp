@extends('layouts.app')

@section('content')
<main class="login-page">
    <div class="container-fluid">
        <div class="login-holder">
            <div class="form-holder">
                <div class="login-img-container">
                    <div class="img-overlay"></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1 class="title">IT Online Application Form</h1>
                </div>
                <div class="login-form-container">
                    <div class="login-form-holder">
                        <div class="login-logo-holder">
                            <img src="{{URL::asset('resources/assets/app-logo.png')}}" class="app-logo img-fluid"/>
                        </div>
                        <div class="form-wrapper">
                        <form method="POST" id="login-form">
                            <div class="fontuser">
                            @csrf
                            {{-- <i class="fa fa-user fa-lg"></i> --}}
                            <input id="username" type="text" placeholder="User Name" class="input-textbox-login" class="form-control" name="username" required autofocus>  </div>
                            <input id="password" type="password" placeholder="Password" class="input-textbox-login" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <button type="button" id="sign-in-btn" class="login-btn btn">
                                {{ __('Login') }}
                            </button>
                        </form>
                    </div>
                    <div class="login-credits-holder">
                        <p class="credit-text">Copyright © 2021 Nanox Philippines, Inc.</p>
                        <p class="credit-text ">All Rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  

</main>

@endsection
