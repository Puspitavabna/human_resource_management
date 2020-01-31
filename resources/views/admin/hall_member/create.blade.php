@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <form method="post" action="{{ route('admin.hall_member.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group category-box">
                            <div>Select Faculty here:</div>
                            <select name="faculty_id" class="form-control category_select" data-value="1">
                                <option value="">Select Faculty</option>
                                @foreach ($designations as $designation)
                                    <option value="{{ $designation->id}}"> {{ $designation->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category-box">
                            <div>Select Faculty here:</div>
                            <select name="faculty_id" class="form-control category_select" data-value="1">
                                <option value="">Select Faculty</option>
                                @foreach ($halls as $hall)
                                    <option value="{{ $hall->id}}"> {{ $hall->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
