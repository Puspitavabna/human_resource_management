@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_designation.create') }}">Create Designation</a>

                </div>
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name </th>
                                <th>Slug</th>
                            </tr>
                        </thead>
                    <tbody>

                    @foreach($designations as $key => $designation)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $designation->id }}</td>
                            <td>{{ $designation->name}}</td>
                            <td width="5%">
                                <a href="{{ route('admin_designation.edit', $designation->id) }}" target="_blank" class="btn-sm btn-warning">Edit</a>
                              <form method="POST" action="{{ route('admin_designation.destroy', $designation->id) }}">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input type="submit" value="Delete" class="btn-sm btn-danger">
                               </form>
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