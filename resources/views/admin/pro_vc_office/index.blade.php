@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_pro_vc_office.create') }}">Create faculty office</a>

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

                    @foreach($pro_vc_offices as $key => $pro_vc_office)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $pro_vc_office->id }}</td>
                            <td>{{ $pro_vc_office->name}}</td>
                            <td>{{ $pro_vc_office->phone_no}}</td>
                            <td>{{ $pro_vc_office->designation->name}}</td>
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