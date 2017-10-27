@extends('layouts.app')
@section('title-breadcrumb')
    <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Event page</h4> </div>
   
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Event page</li>
        </ol>
    </div>
@endsection
@section('content')

    <div class="container">
    <div class="row">
       <div class="col-md-8 col-xs-12 col-md-offset-2">
        <div class="panel panel-default">
             <div class="panel-heading">Create Events</div>
              <div class="panel-body">
            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="/events">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('event_name') ? ' has-error' : '' }}">
                        <label class="col-md-12">Event Name</label>
                        <div class="col-md-12">
                            <input type="text" name="event_name" placeholder="" class="form-control form-control-line"  required> 
                             
                             @if ($errors->has('event_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('event_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                        <label for="start_date" class="col-md-12">Start Date</label>
                        <div class="col-md-12">
                            <input type="date" placeholder="" class="form-control form-control-line" name="start_date" id="start_date" required>
                            @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                            @endif 

                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('start_time') ? ' has-error' : '' }}">
                        <label class="col-md-12">Start Time</label>
                        <div class="col-md-12">
                            <input type="time" name="start_time" class="form-control form-control-line" required>
                            @if ($errors->has('start_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                        <label class="col-md-12">End Date</label>
                        <div class="col-md-12">
                            <input type="date" placeholder="" name="end_date" class="form-control form-control-line" required>
                            @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('end_time') ? ' has-error' : '' }}">
                        <label class="col-md-12">End Time</label>
                        <div class="col-md-12">
                            <input type="time" placeholder="" name="end_time" class="form-control form-control-line" required>
                            @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                        <label class="col-md-12">Event Status</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="status" value="{{ old('status') }}" class="form-control form-control-line" required></textarea>
                            @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Create</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection