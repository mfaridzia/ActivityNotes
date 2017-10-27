@extends('layouts.app')
@section('title-breadcrumb')
    <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4> </div>
   
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
        </ol>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <span class="glyphicon glyphicon-info-sign"></span> User Info
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                <h5 class="text-muted vb">NUMBER OF USERS</h5> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-{{ $total_users }} text-danger">{{ $total_users }}</h3> </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                       <table class="table table-hover">
                            <tr>
                                <th> Name </th>
                                <th> {{ Auth::user()->name }} </th>
                            </tr>
                            <tr>
                                <th> Email </th>
                                <th> {{ Auth::user()->email }} </th> 
                            </tr>
                       </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection