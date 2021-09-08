@extends('layouts.app')

@section('content')
<main>
    <div class="managers-form">
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
            <div class="main-holder">
                <div class="table-wrapper">
                    <table id="table_id" class="table table-bordered custome-table">
                        <thead>
                            <tr>
                                <th>Employee Name</th>
                                <th> Emp ID</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jenny Rose Santos</td>
                                <td>2910852</td>
                                <td>Production Improvement</td>
                                <td><a id="" class="text-primary" data-toggle="modal"  data-target="#exampleModal"><i class="fa fa-eye text-primary"></i></button></a></td>
                            </tr>

                            <tr>
                                <td>Marilyn Real</td>
                                <td>2905394</td>
                                <td>Human Resource & Gen Services</td>
                                <td><a id="" class="text-primary" data-toggle="modal"  data-target="#exampleModal"><i class="fa fa-eye text-primary"></i></button></a></td>
                            </tr>

                            <tr>
                                <td>Maricris Endaya</td>
                                <td>2906951</td>
                                <td>Production</td>
                                <td><a id="" class="text-primary" data-toggle="modal"  data-target="#exampleModal"><i class="fa fa-eye text-primary"></i></button></a></td>
                            </tr>

                        </tbody>
                    </table>

                    <!---approval modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Request Form</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <table class="table-approval">
                                <tr>
                                  <td class="td-main">Request Date</td>
                                  <td class="td-main td-right">06/28/2021</td>
                                  <td class="td-main">Date Hired</td>
                                  <td class="td-main td-right">05/16/2017</td>  
                                </tr>
                                <tr>
                                  <td class="td-main">Requested By</td>
                                  <td class="td-main td-right">Roselle Alcantara</td>
                                  <td class="td-main">Department</td>
                                  <td class="td-main td-right">Production Improvement</td>
                                </tr>
                                <tr>
                                  <td class="td-main">Verified By</td>
                                  <td class="td-main td-right">Menandro Dizon</td>
                                  <td class="td-main">Process/Section</td>
                                  <td class="td-main td-right">YP</td>
                                </tr>
                                <tr>
                                  <td class="td-main">General Manager</td>
                                  <td class="td-main td-right">Anna Gonzales</td>
                                  <td class="td-main">Local Number</td>
                                  <td class="td-main td-right">1058</td>
                                </tr>
                              </table>

                              <table class="emp-table table-approval">
                                <tr>
                                  <td class="td-emp">Employee Name</td>
                                  <td class="td-name">Jenny Rose Santos</td>
                                </tr>
                              </table>

                              <table class="application-type">
                                <tr>
                                  <td class="td-main">Application Type</td>
                                  <td class="td-main td-right">New User Account</td>
                                  <td class="td-main">Process</td>
                                  <td class="td-main td-right">YP</td>
                                </tr>
                                <tr>
                                  <td class="td-main">Global ID</td>
                                  <td class="td-main td-right"></td>
                                  <td class="td-main">PC Name</td>
                                  <td class="td-main td-right">PC16060165J</td>
                                  </tr>
                                </tr>
                              </table>

                              <table class="emp-table table-approval">
                                <tr>
                                  <td class="td-emp">Request Type</td>
                                  <td class="td-name">PC, Logon, Email</td>
                                </tr>
                                <tr>
                                  <td class="td-emp">Application Services</td>
                                  <td class="td-name">Matrix</td>
                                </tr>
                                <tr>
                                  <td class="td-emp">Shared Folder</td>
                                  <td class="td-name">BE, Module</td>
                                </tr>
                              </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success" data-dismiss="modal">Approve</button>
                              <button type="button" class="btn btn-danger">Deny</button>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
        </div>
    </div>
</main>
<script>
    $('document').ready(function(){
        var divFilter ='';
        $("#table_id").DataTable({

        });
    });
    </script>
@endsection