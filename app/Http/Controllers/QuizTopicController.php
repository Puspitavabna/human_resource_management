<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Session;

class QuizTopicController extends Controller
{
    public function index(){
        $quiz_topics = Designation::orderBy('created_at','desc')->Paginate(10);
        return view('quiz_topic.index', compact('quiz_topics'));
    }

    public function store(Request $request){
        $quiz_topic = new Designation();
        $quiz_topic->topic_name = $request->topic_name;
        $quiz_topic->category_id = $request->category_id;
        $quiz_topic->save();
        Session::flash('success','Question added successfully!!');
        return redirect()->route('quiz_topic.index');
    }
}