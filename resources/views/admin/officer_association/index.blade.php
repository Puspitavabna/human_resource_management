@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_officer_association.create') }}">Create faculty office</a>

                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name </th>
                                <th>Phone No </th>
                                <th>Designation</th>
                            </tr>
                        </thead>
                    <tbody>

                    @foreach($officer_associations as $key => $officer_association)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $officer_association->id }}</td>
                            <td>{{ $officer_association->name}}</td>
                            <td>{{ $officer_association->phone_no}}</td>
                            <td>{{ $officer_association->designation->name}}</td>
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