@extends('layouts.header')
@section('content')
@include('admin.message')

<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class="pull-center">
                    <a href="#" data-toggle="modal" data-target="#RegionModal" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add new Region
                    </a>
                </span>
                <br><br>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Region List</h4>
                        <h4 class="card-title pull-right">Today is: {{ date('d-n-Y', time()) }}</h4>
                        <p class="card-category">Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($regions) > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Region Name</th>
                                        <th>Region Code</th>
                                        <th>Status</th>
                                        <th>User Created Date</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($regions as $data)
                                            <tr>
                                                <td>{{ $data->region_id }}</td>
                                                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenterViewOperator{{$data->region_id}}">{{ $data->region_name }}</a></td>
                                                <td>{{ $data->region_code }}</td>
                                                <td>{!!  $data->status == 0 ? '<span class="text-info">Active</span>' : '<span class="text-danger">Inactive</span>' !!}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>
                                                    <form action="{{ 'region.destroy'.$data->region_id }}" method="POST">
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

    @include('admin.regions.add-region')
    @include('admin.regions.region-view')

@endsection
