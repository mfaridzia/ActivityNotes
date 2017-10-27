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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                               @if(session()->has('notif'))
                                   <div class="alert alert-success">
                                        {{ session('notif') }}
                                   </div>
                               @endif
                            <h2 class="box-title" style="text-decoration:underline;">My Events </h2>
                            <a href="/events/create" class="btn btn-sm btn-info"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add New Events </a> <br/> <br/>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name of Events</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Event Status</th>
                                            <th> Settings </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($events as $event)
                                        <tr>
                                            <td> {{ $event->event_name }} </td>
                                            <td> {{ $event->start_date }} {{ $event->start_time }} </td>
                                            <td> {{ $event->end_date }} {{ $event->end_time }} </td>
                                            <td> {{ $event->status }} </td>
                                            <td>
                                                <a href="/events/{{ $event->id }}/edit"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>

                                                 <form action="/events/{{ $event->id }}" method="post" style="display: inline-block;">
                                                    <button type="submit" name="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete </button>
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $events->links() }}
                        </div>
                    </div>
                </div>
@endsection