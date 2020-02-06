@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_hall_members.create') }}">Create Hall Member</a>

                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Designation </th>
                                <th>Halls </th>
                            </tr>
                        </thead>
                    <tbody>

                    @foreach($hall_members as $key => $hall_member)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $hall_member->id }}</td>
                            <td>{{ $hall_member->designation->name}}</td>
                            <td>{{ $hall_member->user->name}}</td>
                            <td>{{ $hall_member->hall->name}}</td>
                            <td width="5%">
                                {{--<a href="{{ route('admin_hall_members.edit', $hall_members->slug) }}" target="_blank" class="btn-sm btn-warning">Edit</a>--}}
                              {{--<form method="POST" action="{{ route('admin_hall_members.destroy', $hall_members->slug) }}">--}}
                                    {{--<input name="_method" type="hidden" value="DELETE">--}}
                                    {{--<input type="submit" value="Delete" class="btn-sm btn-danger">--}}
                               {{--</form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection