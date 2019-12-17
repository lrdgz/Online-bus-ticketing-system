@extends('layouts.header')
@section('content')
@include('admin.message')

<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class="pull-center">
                    <a href="#" data-toggle="modal" data-target="#BusModal" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add new Bus
                    </a>
                </span>
                <br><br>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Bus List</h4>
                        <h4 class="card-title pull-right">Today is: {{ date('d-n-Y', time()) }}</h4>
                        <p class="card-category">Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($buses) > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>Bus ID</th>
                                        <th>Bus Name</th>
                                        <th>Bus Code</th>
                                        <th>Total Seats</th>
                                        <th>User Created Date</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($buses as $data)
                                            <tr class="{{$data->active == 0 ? '' : 'table-warning'}}">
                                                <td>{{ $data->bus_id }}</td>
                                                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenterViewOperator{{$data->bus_id}}">{{ $data->bus_name }}</a></td>
                                                <td>{{ $data->bus_code }}</td>
                                                <td>{{ $data->total_seats }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>
                                                    <form action="{{ '/admin/buses/'.$data->bus_id }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="submit" name="submit" value="Edit" class="btn btn-sm btn-info">
                                                        <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger">
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('admin.buses.add-bus')
    @include('admin.buses.bus-view')

@endsection
