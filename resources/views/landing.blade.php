@extends('layouts.app')

@section('content')
<main>
    <div class="landing-form">
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
                          <div class="notification-holder no-notification">
                            <img class="notif-box-icon" src="{{URL::asset('resources/assets/box.png')}}">
                            <div class="notif-line"></div>
                            <div class="notif-details">
                              <p class="notif-title">No Notification Yet</p>
                              <p class="notif-subtitle">Stay tuned! Notification about your application will show up here.</p>
                            </div> 
                          </div>

                          <div class="notification-holder-yes">
                            <p class="notification-text-title">Notifications :</p>

                            {{-- Dynamic Card --}}
                            <div class="notif-display-area">
                              <div class="notif-icon-check">
                                <i class="fa fa-check" aria-hidden="true"></i>
                              </div>
                              <div class="notif-card">
                                <div class="card-info-group card-user">
                                  <p class="notif-name">Arlene Favila Tadeo</p>
                                  <p class="notif-department">Production</p>
                                </div>
                                <div class="card-info-group card-approver">
                                  <div class="info-top">
                                    <p class="notif-text">Approved by:</p>
                                    <p class="notif-approver">Mary Ann Chua</p>
                                  </div>
                                  <div class="info-bottom">
                                    <p class="notif-date">08/27/2021</p>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>

                            <div class="notif-display-area">
                              <div class="notif-icon-check">
                                <i class="fa fa-check" aria-hidden="true"></i>
                              </div>
                              <div class="notif-card">
                                <div class="card-info-group card-user">
                                  <p class="notif-name">Rio Jane Sad-ang</p>
                                  <p class="notif-department">PPIC</p>
                                </div>
                                <div class="card-info-group card-approver">
                                  <div class="info-top">
                                    <p class="notif-text">Approved by:</p>
                                    <p class="notif-approver">Hiroshi Tamagawa</p>
                                  </div>
                                  <div class="info-bottom">
                                    <p class="notif-date">07/13/2021</p>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>

                            <div class="notif-display-area">
                              <div class="notif-icon-times">
                                <i class="fa fa-times" aria-hidden="true"></i>
                              </div>
                              <div class="notif-card">
                                <div class="card-info-group card-user">
                                  <p class="notif-name"> ClarizaMae Malig </p>
                                  <p class="notif-department">Supplier Quality Control</p>
                                </div>
                                <div class="card-info-group card-approver">
                                  <div class="info-top">
                                    <p class="notif-text">Denied by:</p>
                                    <p class="notif-approver">Kristoffer Ryan David</p>
                                  </div>
                                  <div class="info-bottom">
                                    <p class="notif-date">05/04/2021</p>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                            
                          </div>

                        </div>
                    </div>
                    
                </div>
                <div class="nav-option-wrapper">
                    <a>Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container-main">
           
            <div class="dashboard">
                <div class="dashboard-wrapper">
                    <div class="user-wrapper">
                        <img class="user-icon" src="{{URL::asset('resources/assets/user.png')}}">
                        <div class="user-details">
                            <p class="user-name">Lorraine Angelu Agustin</p>
                            <p class="user-id">2911498</p>
                        </div>
                    </div>
                    <div class="list-wrapper">
                        <a class="list-container active-list" href="{{ url('itform') }}">
                            <i class="fa fa-id-card list-icon" aria-hidden="true"></i>
                            <p class="list-choice">Request Form</p>
                        </a>
                        <a class="list-container" href="{{ url('documents') }}">
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
            <div class="parent-holder">
                <div class="new-box">
                  <a href="#" class="box-title">
                    <span>New</span>
                    <span class="badge">4</span>
                  </a>
                    <div class="box-wrapper">
                      <div class="box-card">
                        <p class="card-title">Account Removal</p>
                        <p class="card-title-second">Chris Narciso</p>
                        <p class="card-title-third">Production Control</p>
                        <p class="card-date">08/09/2021</p>

                        <div class="function-btn">
                          <button type="button" class="get-btn">Get</button>
                          <button type="button" class="cancel-btn">Cancel</button>
                        </div>
                      </div>

                      <div class="box-card">
                        <p class="card-title">SSL VPN</p>
                        <p class="card-title-second">Jovito Malang</p>
                        <p class="card-title-third">Manufacturing Management Control</p>
                        <p class="card-date">08/23/2021</p>

                        <div class="function-btn">
                          <button type="button" class="get-btn">Get</button>
                          <button type="button" class="cancel-btn">Cancel</button>
                        </div>
                      </div>

                      <div class="box-card">
                        <p class="card-title">New User Account</p>
                        <p class="card-title-second">Christian Joseph Salandanan</p>
                        <p class="card-title-third">PED</p>
                        <p class="card-date">07/26/2021</p>

                        <div class="function-btn">
                          <button type="button" class="get-btn">Get</button>
                          <button type="button" class="cancel-btn">Cancel</button>
                        </div>
                      </div>

                      <div class="box-card">
                        <p class="card-title">SSL VPN</p>
                        <p class="card-title-second">Jovito Malang</p>
                        <p class="card-title-third">Manufacturing Management Control</p>
                        <p class="card-date">08/23/2021</p>

                        <div class="function-btn">
                          <button type="button" class="get-btn">Get</button>
                          <button type="button" class="cancel-btn">Cancel</button>
                        </div>
                      </div>
                      
                    </div>
                    
                </div>

                {{-- <div class="empty-new-box">
                  <a href="#" class="empty-box-title">
                    <span>New</span>
                    <span class="badge">0</span>
                  </a>
                  <div class="empty-box-wrapper">
                    <img class="empty-box-icon" src="{{URL::asset('resources/assets/box.png')}}">
                    <div class="box-line"></div>
                    <p class="empty-title">This field is empty</p>
                    <p class="empty-subtitle">You don't have any new requests.</p>
                  </div>
                </div> --}}

                <div class="ongoing-box">
                  <a href="#" class="box-title">
                    <span>On-going</span>
                    <span class="badge">2</span>
                  </a>
                    <div class="box-wrapper">
                      <div class="box-card">
                        <p class="card-title">New User Account</p>
                        <p class="card-title-second">Christian Joseph Salandanan</p>
                        <p class="card-title-third">PED</p>
                        <p class="card-date">07/26/2021</p>

                        <div class="function-btn">
                          <button type="button" class="resolve-btn">Resolve</button>
                        </div>
                      </div>
                      
                      <div class="box-card">
                        <p class="card-title">Email Removal</p>
                        <p class="card-title-second">Cecilia Bautista</p>
                        <p class="card-title-third">RMM</p>
                        <p class="card-date">07/14/2021</p>

                        <div class="function-btn">
                          <button type="button" class="resolve-btn">Resolve</button>
                        </div>
                      </div>
                    </div>
                </div>

                {{-- <div class="empty-ongoing-box">
                  <a href="#" class="empty-box-title">
                    <span>On-going</span>
                    <span class="badge">0</span>
                  </a>
                  <div class="empty-box-wrapper">
                    <img class="empty-box-icon" src="{{URL::asset('resources/assets/box.png')}}">
                    <div class="box-line"></div>
                    <p class="empty-title">This field is empty</p>
                    <p class="empty-subtitle">You don't have any on-going requests.</p>
                  </div>
                </div> --}}

                <div class="done-box">
                  <a href="#" class="box-title">
                    <span>Done</span>
                    <span class="badge">2</span>
                  </a>
                    <div class="box-wrapper">
                      <div class="box-card">
                        <p class="card-title">IMES/Matrix</p>
                        <p class="card-title-second">Carrelle Jane Sicat</p>
                        <p class="card-title-third">Production</p>
                        <p class="card-date-done">07/28/2021</p>
                      </div>

                      <div class="box-card">
                        <p class="card-title">Email Removal</p>
                        <p class="card-title-second">Cecilia Bautista</p>
                        <p class="card-title-third">RMM</p>
                        <p class="card-date-done">07/14/2021</p>
                      </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection