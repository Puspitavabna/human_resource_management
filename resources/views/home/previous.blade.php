@extends('layouts.master')
@section('content')


   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="news-grid">
               <div class="col-md-6 news-text two">
                  @foreach($tutorials as $tutorial)
                     <tr>
                        <h3> <a href="{{ $tutorial->tutorial_url }}"><td>{{$tutorial->title}}</td></a></h3>
                        <td>{{$tutorial->category_id}}</td>
                        <td>{{$tutorial->description}}</td>
                        <td>
                        </td>
                     </tr>
                  @endforeach

               </div>

               <div class="clearfix"></div>
            </div>



         </div>
      </div>
   </div>
@endsection