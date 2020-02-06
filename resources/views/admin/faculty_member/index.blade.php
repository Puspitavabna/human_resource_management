@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_faculty_members.create') }}">Create faculty_member</a>

                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name </th>
                                <th>Email </th>
                                <th>Faculty </th>
                                <th>Designation</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                    <tbody>

                    @foreach($faculty_members as $key => $faculty_member)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $faculty_member->id }}</td>
                            <td>{{ $faculty_member->name}}</td>
                            <td>{{ $faculty_member->email}}</td>
                            <td>{{ $faculty_member->faculty->name}}</td>
                            <td>{{ $faculty_member->department->name}}</td>
                            <td>{{ $faculty_member->designation->name}}</td>
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