
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

            <div class="main-container">
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

                <div class="event-container">
                    <div class="form-container">
                        <div class="actual-form">
                          <form class="network-related-form">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                  
                                      <div class="swiper-slide">
                                          <div class="swiper-content-holder">
                                            <p class="form-heading">Employee's Details</p>
                                            <div class="swiper-form-part">
                                              <div class="form-group">
                                                <p class="label-form">Full Name</p>
                                                <div class="form-flex-group">
                                                  <input type="text" class="form-control textbox-form" id="" placeholder="First Name">
                                                  <input type="text" class="form-control textbox-form" id="" placeholder="Last Name">
                                                </div>
                                              </div>
                                              <div class="form-flex-group">
                                                <div class="form-group">
                                                  <p class="label-form">Department</p>
                                                  <input type="text" class="form-control textbox-form" id="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                  <p class="label-form">Process/Section</p>
                                                  <input type="text" class="form-control textbox-form" id="" placeholder="">
                                                </div>
                                              </div>
                                              <div class="form-flex-group">
                                                <div class="form-group">
                                                  <p class="label-form">Local</p>
                                                  <input type="text" class="form-control textbox-form" id="" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                  <p class="label-form">Date Hired</p>
                                                  <div class="form-flex-group">
                                                    <input type="text" class="form-control textbox-form" id="" placeholder="MM">
                                                    <input type="text" class="form-control textbox-form" id="" placeholder="DD">
                                                    <input type="text" class="form-control textbox-form" id="" placeholder="YYYY">

                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="swiper-slide">
                                        <div class="swiper-content-holder">
                                          <p class="form-heading">Account Details</p>
                                          <div class="swiper-form-part">
                                            <div class="form-group">
                                              <p class="label-form">Application Type</p>
                                              <div class="form-flex-group radio-group-flex">
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="radio" name="accountTypeRadio" id="accountNew" value="accountNew">
                                                  <label class="radio-image" for="accountNew">
                                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                    <p class="radio-label-text">New User</p>
                                                  </label>
                                                  
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="radio" name="accountTypeRadio" id="accountUpdate" value="accountUpdate">
                                                  <label class="radio-image" for="accountUpdate">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Update Account</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="radio" name="accountTypeRadio" id="accountRemove" value="accountRemove">
                                                  <label class="radio-image" for="accountRemove">
                                                    <i class="fa fa-user-times" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Remove User</p>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <p class="label-form">Global ID</p>
                                              <input type="text" class="form-control textbox-form" id="" placeholder="">
                                            </div>
                                            <div class="form-group">
                                              <p class="label-form">PC Name</p>
                                              <input type="text" class="form-control textbox-form" id="" placeholder="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide">
                                        <div class="swiper-content-holder">
                                          <p class="form-heading">Service Details</p>
                                          <div class="swiper-form-part">
                                            <div class="form-group">
                                              <p class="label-form">Request Type</p>
                                              <div class="form-flex-group radio-group-flex">
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="radio" name="serviceRequestRadio" id="requestPc" value="requestPc">
                                                  <label class="radio-image" for="requestPc">
                                                    <i class="fa fa-laptop" aria-hidden="true"></i>
                                                    <p class="radio-label-text">PC Request</p>
                                                  </label>
                                                  
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="radio" name="serviceRequestRadio" id="requestLogon" value="requestLogon">
                                                  <label class="radio-image" for="requestLogon">
                                                    <i class="fa fa-windows" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Logon Request</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="radio" name="serviceRequestRadio" id="requestEmail" value="requestEmail">
                                                  <label class="radio-image" for="requestEmail">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Email Request</p>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group">
                                              <p class="label-form">Application / Services</p>
                                              <div class="form-flex-group radio-group-flex">
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="serviceAppRadio" id="appERP" value="appERP">
                                                  <label class="radio-image" for="appERP">
                                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                                    <p class="radio-label-text">ERP</p>
                                                  </label>
                                                  
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="serviceAppRadio" id="appSSLVPN" value="appSSLVPN">
                                                  <label class="radio-image" for="appSSLVPN">
                                                    <i class="fa fa-home" aria-hidden="true"></i>
                                                    <p class="radio-label-text">SSL-VPN</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="serviceAppRadio" id="appIMES" value="appIMES">
                                                  <label class="radio-image" for="appIMES">
                                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                                    <p class="radio-label-text">IMES</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="serviceAppRadio" id="appPDM" value="appPDM">
                                                  <label class="radio-image" for="appPDM">
                                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                                    <p class="radio-label-text">PDM</p>
                                                  </label>
                                                  
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="serviceAppRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide">
                                        <div class="swiper-content-holder">
                                          <p class="form-heading">Additional Request</p>
                                          <div class="swiper-form-part">
                                            <div class="form-group">
                                              <p class="label-form">Shared Folder</p>
                                              <div class="form-flex-group radio-group-flex radio-group-flex-custom">
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appERP" value="appERP">
                                                  <label class="radio-image" for="appERP">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">ERP</p>
                                                  </label>
                                                  
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appSSLVPN" value="appSSLVPN">
                                                  <label class="radio-image" for="appSSLVPN">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">SSL-VPN</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appIMES" value="appIMES">
                                                  <label class="radio-image" for="appIMES">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">IMES</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appPDM" value="appPDM">
                                                  <label class="radio-image" for="appPDM">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">PDM</p>
                                                  </label>
                                                  
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input radio-custom" type="checkbox" name="sharedFolderRadio" id="appNetUpgrade" value="appNetUpgrade">
                                                  <label class="radio-image" for="appNetUpgrade">
                                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                                    <p class="radio-label-text">Internet Upgrade</p>
                                                  </label>
                                                </div>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                      <div class="swiper-slide">
                                        <div class="swiper-content-holder">
                                          <p class="form-heading">For Approval</p>
                                          {{-- <div class="final-form-confirmation"> --}}
                                            <table class="table table-bordered table-hover table-sm">
                                              <tr>
                                                <td bgcolor="gray">Request Date</td>
                                                <td>Ghirlie Mei Saptang</td>
                                                <td bgcolor="gray">Date Hired</td>
                                                <td>2018-10-20</td>
                                              </tr>
                                            </table>
                                          
                                        </div>
                                      </div>
                                  
                                </div>
                                {{-- <div class="swiper-pagination"></div> --}}
                                
                                <div class="progress-btn">
                                    <button type="button" class="btn btn-progress swiper-button-next">Next</button>
                                    <button type="button" class="btn btn-progress swiper-button-prev">Previous</button>
                                </div>
                                
                                
                            </div>
                            <div class="swiper-pagination"></div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection