<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\QuizQuestion;
use App\Models\Category;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class AdminQuizQuestionController extends Controller
{
    public function index(Request $request){
        $quiz_topic_id = $request->quiz_topic_id;

        if(empty($quiz_topic_id)){
            $quiz_questions = QuizQuestion::orderBy('created_at','desc')->Paginate(10);
        } else {
            $quiz_questions = QuizQuestion::where('quiz_topic_id', $quiz_topic_id)->orderBy('created_at','desc')->Paginate(10);
        }
        return view('admin.quiz_question.index', compact('quiz_questions'));
    }
    public function create(){
        $categories = Category::all();
        $users = User::all();
        return view ('admin.quiz_question.create', compact('categories','users'));
    }

    public function store(Request $request){
        $quiz_topic_id = $request->quiz_topic_id;
        $question = new QuizQuestion();
        $question->question_details = $request->question_details;
        $question->answer_explanation = $request->answer_explanation;
        $question->quiz_topic_id = $quiz_topic_id;
        $question->user_id = Auth::user()->id;
        $question->save();
        Session::flash('success','Question added successfully!!');
        return redirect()->route('admin_quiz_question.index', ['quiz_topic_id' => $quiz_topic_id]);
    }
    public function edit($id){
        $question = QuizQuestion::find($id);
        return view('admin.quiz_question.edit', compact('question'));
    }

    public function update(Request $request, $id){
        $question = QuizQuestion::find($id);
        $question->question_details = $request->question_details;
        $question->update();
        return redirect()->route('admin_quiz_question.index');
    }
    public function destroy($id){
        $question = QuizQuestion::find($id);
        $question->delete();
        Session::flash('success','Question delete successfully');
        return redirect()->route('admin_quiz_question.index');
    }
}