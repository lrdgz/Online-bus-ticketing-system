@extends('layouts.header')
@section('content')
@include('admin.message')

<div class="content">
    <div class="content-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class="pull-center">
                    <a href="#" data-toggle="modal" data-target="#OperatorModal" class="btn btn-sm btn-primary">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add new Operator
                    </a>
                </span>
                <br><br>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Operators List</h4>
                        <h4 class="card-title pull-right">Today is: {{ date('d-n-Y', time()) }}</h4>
                        <p class="card-category">Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($operators) > 0)
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>User ID</th>
                                        <th>Bus Operator</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>User Created Date</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($operators as $data)
                                            <tr>
                                                <td>{{ $data->operator_id }}</td>
                                                <td><a href="#" data-toggle="modal" data-target="#exampleModalCenterViewOperator">{{ $data->operator_name }}</a></td>
                                                <td>{{ $data->operator_email }}</td>
                                                <td>{{ $data->operator_phone }}</td>
{{--                                                <td>{{ $data->operator_address }}</td>--}}
{{--                                                <td>{{ $data->operator_description }}</td>--}}
                                                <td>{{ $data->created_at }}</td>
                                                <td>
                                                    <form action="{{ '/admin/operator/'.$data->operator_id }}" method="POST">
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

    @include('admin.operators.add-operator')
    @include('admin.operators.operator-view')

@endsection
