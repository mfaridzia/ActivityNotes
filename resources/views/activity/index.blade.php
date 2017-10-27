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
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                   @if(session()->has('notif'))
                       <div class="alert alert-success">
                            {{ session('notif') }}
                       </div>
                   @endif
                <h2 class="box-title" style="text-decoration:underline;">My Activity </h2>
                <a href="/activity/create" class="btn btn-sm btn-info"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Activity </a> <br/> <br/>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name of Activity</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Activity Status</th>
                                <th> Settings </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activities as $activity)
                            <tr>
                                <td> {{ $activity->activity_name }} </td>
                                <td> {{ $activity->start_date }} {{ $activity->start_time }} </td>
                                <td> {{ $activity->end_date }} {{ $activity->end_time }} </td>
                                <td> {{ $activity->status }} </td>
                                <td>
                                    <a href="/activity/{{ $activity->id }}/edit"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>

                                     <form action="/activity/{{ $activity->id }}" method="post" style="display: inline-block;">
                                        <button type="submit" name="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete </button>
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $activities->links() }}
            </div>
        </div>
    </div>
@endsection