@extends('layouts.admin_master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                        <tr>
                            <th>answer_details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$answer->answer_details}}</td>
                        </tr>
                        </tbody>
                    </table>
                    {{--<div>--}}
                    {{--Tutorial Title--}}
                    {{--Category-id--}}
                    {{--Description--}}
                    {{--</div>--}}
                    {{--<div>--}}
                    {{--{{ $designation->title }}--}}
                    {{--{{ $designation->category_id }}--}}
                    {{--{{ $designation->description }}--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection