@extends('layouts.admin_master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('includes.message')
                <div class="alert alert-success">
                    <form method="post" action="{{ route('admin_quiz_answer.update',$quiz_answer->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}


                        <div class="form-group"> <!-- Name field -->
                            <label class="control-label " for="name" >answer_details</label>
                            <input class="form-control" name="answer_details" value="{{ $quiz_answer->answer_details }}" type="text" placeholder="answer_details" required />
                        </div>

                        <div class="form-group"> <!-- Name field -->
                            <span>is correct:</span>
                            <input name="is_correct" value="1" type="checkbox"/>
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