@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_registers.create') }}">Create register</a>

                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name </th>
                                <th>Section </th>
                                <th>Designation</th>
                                <th>Joining Date</th>
                            </tr>
                        </thead>
                    <tbody>

                    @foreach($registers as $key => $register)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $register->id }}</td>
                            <td>{{ $register->name}}</td>
                            <td>{{ $register->section->name}}</td>
                            <td>{{ $register->designation->name}}</td>
                            <td>{{ $register->joining_date}}</td>
                            {{--<td width="5%">--}}
                                {{--<a href="{{ route('admin_department.edit', $department->slug) }}" target="_blank" class="btn-sm btn-warning">Edit</a>--}}
                              {{--<form method="POST" action="{{ route('admin_department.destroy', $department->slug) }}">--}}
                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                    {{--<input type="submit" value="Delete" class="btn-sm btn-danger">--}}
                               {{--</form>--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection