
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
                            <a class="list-container" href="{{ url('itform') }}">
                                <i class="fa fa-id-card list-icon" aria-hidden="true"></i>
                                <p class="list-choice">Request Form</p>
                            </a>
                            <a class="list-container" href="{{ url('documents') }}">
                                <i class="fa fa-folder list-icon" aria-hidden="true"></i>
                                <p class="list-choice">Document Tray</p>
                            </a>
                            <a class="list-container active-list" href="{{ url('history') }}">
                                <i class="fa fa-history list-icon" aria-hidden="true"></i>
                                <p class="list-choice">History</p>
                            </a>
                            <a class="list-container" data-toggle="modal" data-target="#helpModal">
                              <i class="fa fa-question-circle list-icon" aria-hidden="true"></i>
                              <p class="list-choice">Help</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="event-container">
                   <div class="history-holder">
                        <div class="card-holder tray-holder">
                          <div class="tray-title"> <i class="fa fa-bars" aria-hidden="true"></i>                            Forms</div>
                          <div class="tray-content ticket-tray">

                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            <div class="request-card-wrapper">
                                <div class="upper-card">
                                    <p class="card-view-btn"><i class="fa fa-search" aria-hidden="true"></i>click to view</p>
                                    <p class="upper-card-label">New User Account</p>
                                    <p class="card-date">08/11/2021</p>
                                </div>
                                <div class="lower-card">
                                    <p class="card-username">Honeyjeane Camacho</p>
                                    <p class="card-department">Rework and Material Management <span class="card-process"></span></p>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                        <div class="preview-holder tray-holder">
                          <div class="tray-title"> <i class="fa fa-search" aria-hidden="true"></i>                            Preview</div>
                          <div class="tray-content preview-tray">

                            <div class="request-card-wrapper empty">
                              <img class="notif-box-icon" src="{{URL::asset('resources/assets/preview.png')}}">
                              <div class="notif-line"></div>
                              <div class="notif-details">
                                <p class="notif-title">Preview Section</p>
                                <p class="notif-subtitle">Click application at the form tray to display here.</p>
                              </div> 
                            </div>

                            <div class="preview-form-wrapper">

                              <div class="details-support">
                              </div>
                              <div class="details-table">
                                  <table class="confirmation-table-up">
                                    <tr>
                                      <td class="td-upper td-bg">Requested Date</td>
                                      <td class="td-upper">08/31/2021</td>
                                      <td class="td-upper td-bg">Date Hired</td>
                                      <td class="td-upper">10/24/2022</td>
                                    </tr>
                                    <tr>
                                      <td class="td-upper td-bg">Requested By</td>
                                      <td class="td-upper">ClarizaMae Malig</td>
                                      <td class="td-upper td-bg">Department</td>
                                      <td class="td-upper">Quality Assurance</td>
                                    </tr>
                                    <tr>
                                      <td class="td-upper td-bg">Verified By</td>
                                      <td class="td-upper">Michelle Marzan</td>
                                      <td class="td-upper td-bg">Process/Section</td>
                                      <td class="td-upper">Supplier Quality Control</td>
                                    </tr>
                                    <tr>
                                      <td class="td-upper td-bg">General Manager</td>
                                      <td class="td-upper">Kerwin Sotto</td>
                                      <td class="td-upper td-bg">Local Number</td>
                                      <td class="td-upper">1081</td>
                                    </tr>
                                  </table>
    
                                  <table class="confirmation-table-bot table-username">
                                    <tr>
                                      <td class="td-bg td-label" colspan="2">Employee Name</td>
                                      <td class="td-name" colspan="2"> Alfa Joy Zamora</td>
                                    </tr>                                            
                                  </table>
    
                                  <table class="confirmation-table-bot">
                                    <tr>
                                      <td class="td-upper td-bg">Application Type</td>
                                      <td class="td-upper">New User</td>
                                      <td class="td-upper td-bg">Process</td>
                                      <td class="td-upper">SQA</td>
                                    </tr>
                                    <tr>
                                      <td class="td-upper td-bg">Global ID</td>
                                      <td class="td-upper">21G500035</td>
                                      <td class="td-upper td-bg">PC Name</td>
                                      <td class="td-upper">PC17090197J</td>
                                    </tr> 
                                  </table>
    
                                  <table class="confirmation-table-bot table-username">
                                    <tr>
                                      <td class="td-bg td-label" colspan="2">Request Type</td>
                                      <td class="td-name" colspan="2">PC, Logon, Email</td>
                                    </tr>   
                                    <tr>
                                      <td class="td-bg td-label" colspan="2">Application Services</td>
                                      <td class="td-name" colspan="2">IMES, SSL-VPN, ERP, PDM</td>
                                    </tr> 
                                    <tr>
                                      <td class="td-bg td-label" colspan="2">Shared Folder*</td>
                                      <td class="td-name" colspan="2">BE, Common</td>
                                    </tr>                                          
                                  </table>
                              </div>
                              <div class="details-button">
                                <button type="button" class="btn btn-secondary btn-close">Close</button>
                              </div>

                            </div>

                          </div>
                        </div>
                   </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection