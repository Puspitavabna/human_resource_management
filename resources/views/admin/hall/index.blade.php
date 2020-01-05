@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    Here you will get tutorial. <a href="{{ route('admin_hall.create') }}">Create Hall</a>

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

                    @foreach($halls as $key => $hall)
                        {{ csrf_field() }}
                        <tr>
                            <td>{{ $hall->id }}</td>
                            <td>{{ $hall->name}}</td>
                            <td width="5%">
                                <a href="{{ route('admin_hall.edit', $hall->slug) }}" target="_blank" class="btn-sm btn-warning">Edit</a>
                              <form method="POST" action="{{ route('admin_hall.destroy', $hall->slug) }}">
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