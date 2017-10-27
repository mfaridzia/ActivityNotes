@extends('layouts.app')
@section('title-breadcrumb')
    <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Activity page</h4> </div>
   
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Activity page</li>
        </ol>
    </div>
@endsection
@section('content')

   <div class="container">
    <div class="row">
       <div class="col-md-8 col-xs-12 col-md-offset-2">
        <div class="panel panel-default">
             <div class="panel-heading">Edit Activity</div>
              <div class="panel-body">
            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="/activity/{{ $activity->id }}">
                    <div class="form-group{{ $errors->has('activity_name') ? ' has-error' : '' }}">
                        <label class="col-md-12">Activity Name</label>
                        <div class="col-md-12">
                            <input type="text" name="activity_name"value="{{ $activity->activity_name }}"  placeholder="" class="form-control form-control-line"  required> 
                             
                             @if ($errors->has('activity_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('activity_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                        <label for="start_date" class="col-md-12">Start Date</label>
                        <div class="col-md-12">
                            <input type="date" value="{{ $activity->start_date }}" placeholder="" class="form-control form-control-line" name="start_date" id="start_date" required>
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
                            <input type="time" name="start_time" value="{{ $activity->start_time }}"  class="form-control form-control-line" required>
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
                            <input type="date" value="{{ $activity->end_date }}" placeholder="" name="end_date" class="form-control form-control-line" required>
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
                            <input type="time" value="{{ $activity->end_time }}" placeholder="" name="end_time" class="form-control form-control-line" required>
                            @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                        <label class="col-md-12">Activity Status</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="status" class="form-control form-control-line" required> {{ $activity->status }} </textarea>
                            @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                            @endif 
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Update</button>
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