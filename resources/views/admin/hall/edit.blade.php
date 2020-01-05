@extends('layouts.master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <div class="clearfix"></div>
                    <form method="post" action="{{ route('admin_hall.update', $hall->slug) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group"> <!-- Name field -->
                            <label class="control-label " for="name">Name</label>
                            <input class="form-control" name="title" type="text"  value="{{$hall->name}}" />
                        </div>
                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <button type="button" class="btn btn-danger pull-right" id="clear">Clear</button>
                        </div>
                        <div class="clearfix"></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
