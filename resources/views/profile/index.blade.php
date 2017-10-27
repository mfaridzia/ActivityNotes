@extends('layouts.app')
@section('title-breadcrumb')
    <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Profile page</h4> </div>
   
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Profile page</li>
        </ol>
    </div>
@endsection
@section('content')

	<div class="row">
        <div class="col-md-5 col-xs-12 col-md-offset-3">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="/storage/photo/{{ Auth::user()->photo }}">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="/storage/photo/{{ Auth::user()->photo }}" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">{{ Auth::user()->name }}</h4>
                            <h5 class="text-white">{{ Auth::user()->email }}</h5> </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <div class="col-md-12 col-sm-4 text-center">
                        <h3 class="text-purple"> <span class="glyphicon glyphicon-user"></span> </h3>
                        <h2> Hello, {{ Auth::user()->name }} </h2> 
                    </div>
            </div>
        </div>
        
    </div>

@endsection