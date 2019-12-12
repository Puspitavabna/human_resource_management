@extends('layouts.admin_master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8">
                {{--<div>--}}
                    {{--Here you will get topic. <a class="btn btn-info" href="{{ route('admin_quiz_topic.create') }}">Create topic</a>--}}
                {{--</div>--}}
                <div class="alert alert-success">
                    <table id="order-listing" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Topic name</th>
                            <th>Category_name</th>
                            <th>View Question</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quiz_topics as $quiz_topic)
                            <tr>
                                <td>{{$quiz_topic->topic_name}}</td>
                                <td>{{$quiz_topic->category->name}}</td>
                                <td><a href="{{ route('quiz_question.index', ['quiz_topic_id' => $quiz_topic->id])}}" class="btn btn-info">View Question</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php $category = [] ?>
            @foreach($quiz_topics as $quiz_topic)
                @if(!in_array($quiz_topic->category->name, $category))
                    <br/>
                    <h3>{{ $quiz_topic->category->name }}</h3>
                @endif
                <div><a href="{{ route('quiz_question.index', ['quiz_topic_id' => $quiz_topic->id])}}">{{$quiz_topic->topic_name}}</a></div>
                <?php array_push($category, $quiz_topic->category->name); ?>
            @endforeach
        </div>
    </div>
</div>

@endsection