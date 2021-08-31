
@extends('layouts.app')

@section('content')
<main>
    <div class="userform">
        <div class="container-custom">
            
            <nav class="custom-navbar navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="{{URL::asset('resources/assets/form.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                    <span class="nav-title">NXP IT-APP</span>
                </a>
                <div class="nav-options">
                    <div class="nav-option-wrapper">
                        <div class="dropdown">
                            <button class="btn-notification" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-bell nav-icon" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu notification-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="nav-option-wrapper">
                        <a>Logout</a>
                    </div>
                </div>
            </nav>

            <div class="dashboard">
                <div class="dashboard-wrapper">
                    <div class="user-wrapper">
                        <img class="user-icon" src="{{URL::asset('resources/assets/user.png')}}">
                        <div class="user-details">
                            <p class="user-name">Richard Marck Barreda</p>
                            <p class="user-id">2912280</p>
                        </div>
                    </div>
                    <div class="list-wrapper">
                        <a class="list-container" href="{{ url('itform') }}">
                            <i class="fa fa-id-card list-icon" aria-hidden="true"></i>
                            <p class="list-choice">Request Form</p>
                        </a>
                        <a class="list-container active-list" href="{{ url('documents') }}">
                            <i class="fa fa-folder list-icon" aria-hidden="true"></i>
                            <p class="list-choice">Document Tray</p>
                        </a>
                        <a class="list-container" href="{{ url('history') }}">
                            <i class="fa fa-history list-icon" aria-hidden="true"></i>
                            <p class="list-choice">History</p>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="content-wrapper">
                <div class="title-wrapper">
                    <h1>Hello World</h1>
                </div>
                <div class="form-wrapper"></div>
            </div> --}}
            

        </div>
    </div>
</main>
@endsection