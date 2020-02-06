@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <form method="post" action="{{ route('admin_faculty_members.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group"> <!-- Name field -->
                            <label class="control-label " for="name" >Name</label>
                            <input class="form-control" name="name" type="text" placeholder="name" required />
                        </div>
                        <div class="form-group"> <!-- Name field -->
                            <label class="control-label " for="name" >Email</label>
                            <input class="form-control" name="email" type="text" placeholder="email" required />
                        </div>
                        <div class="form-group"> <!-- Name field -->
                            <label class="control-label " for="name" >Phone No</label>
                            <input class="form-control" name="phone_no" type="text" placeholder="phone_no" required />
                        </div>
                        <div class="form-group category-box">
                            <div>Select Designation here:</div>
                            <select name="designation_id" class="form-control category_select" data-value="1">
                                <option value="">Select Designation</option>
                                @foreach ($designations as $designation)
                                    <option value="{{ $designation->id}}"> {{ $designation->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category-box">
                            <div>Select Faculty here:</div>
                            <select name="faculty_id" class="form-control category_select" data-value="1">
                                <option value="">Select Faculty</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id}}"> {{ $faculty->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category-box">
                            <div>Select Department here:</div>
                            <select name="department_id" class="form-control category_select" data-value="1">
                                <option value="">Select Faculty</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id}}"> {{ $department->name }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <button type="button" class="btn btn-danger pull-right" id="clear">Clear</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
