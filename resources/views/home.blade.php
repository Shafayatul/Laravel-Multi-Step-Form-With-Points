@extends('layouts.app2')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Dashboard</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Welcome to your Project Oblio Airdrop Dashboard
                            </h2>
                        </div>
                        <div class="body">

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Profile Info</h3>
                                    </div>
                                    <div class="panel-body">
                                      <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center"> 
                                            @if($current_user->avatar == null)
                                                <img alt="User Pic" src="{{ URL::asset('images/user.png') }}" class="img-circle img-responsive"> 
                                            @else
                                                <img alt="User Pic" src="{{ $current_user->avatar }}" class="img-circle img-responsive"> 
                                            @endif
                                        </div>


                                        

                                        <div class=" col-md-9 col-lg-9 "> 
                                          <table class="table table-user-information">
                                            <tbody>
                                              <tr>
                                                <td>Name:</td>
                                                <td>{{ $current_user->name }}</td>
                                              </tr>
                                              <tr>
                                                <td>Email</td>
                                                <td><a href="mailto:info@support.com">{{ $current_user->email }}</a></td>
                                              </tr>
                                              <tr>
                                                <td>Profile Type</td>
                                                <td>{{ $current_user->type }}</td>
                                              </tr>
                                              <tr>
                                                <td>Profile Created At</td>
                                                <td>{{ $current_user->created_at }}</td>
                                              </tr>
                                              <tr>
                                                <td>Karma</td>
                                                <td>{{ $current_user->point }}</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- #END# Input -->
        </div>
    </section>
@endsection
