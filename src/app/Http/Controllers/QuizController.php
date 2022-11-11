<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BigQuestion;
use App\Models\Question;
use App\Models\Choice;

class QuizController extends Controller
{
    public function list()
    {
        $big_questions = BigQuestion::orderby('id', 'asc')->get();
        return view('quiz.list', compact('big_questions'));
    }

    public function detail($big_question_id)
    {
        $big_question = BigQuestion::find($big_question_id)->load('questions.choices');
        $data = [
            'bq' => $big_question
        ];
        return view('quiz.detail', $data);
    }

    public function createList()
    {
        return view('edit.createList');
    }

    public function storeList(Request $request)
    {
        // タイトル名追加
        $big_question=new BigQuestion();   
        $big_question->title=$request->input('title');
        $big_question->save();  

        $big_question = BigQuestion::latest('id')->first();
        return view('edit.createImg', compact('big_question'));
    }

    public function storeImg(Request $request)
    {
        // 画像追加
        $question=new Question();   
        $question->img=$request->input('img');
        $question->big_question_id=$request->input('big_question_id');
        $question->save();  
        
        $question = Question::latest('id')->first();
        return view('edit.createChoice', compact('question'));
    }

    public function storeChoice1(Request $request)
    {

        // 選択肢追加
        $choice1=new Choice();   
        $choice1->name=$request->input('name');
        $choice1->question_id=$request->input('question_id');
        $choice1->valid=$request->input('valid');
        $choice1->save();  

        $question = Question::latest('id')->first();
        return view('edit.createChoice', compact('question'));

    }

    public function storeChoice2(Request $request)
    {

        // 選択肢追加
        $choice2=new Choice();   
        $choice2->name=$request->input('name');
        $choice2->question_id=$request->input('question_id');
        $choice2->save();  

        $question = Question::latest('id')->first();
        return view('edit.createChoice', compact('question'));

    }

    public function storeChoice3(Request $request)
    {

        // 選択肢追加
        $choice3=new Choice();   
        $choice3->name=$request->input('name');
        $choice3->question_id=$request->input('question_id');
        $choice3->save();  

        $question = Question::latest('id')->first();
        return view('edit.createChoice', compact('question'));

    }

    public function storeChoices(Request $request)
    {

        //一覧表示画面にリダイレクト
        $big_questions = BigQuestion::orderby('id', 'asc')->get();
        return view('quiz.list', compact('big_questions'));
    }


    public function edit()
    {
        $big_questions = BigQuestion::orderby('id', 'asc')->get();
        return view('edit.edit', compact('big_questions'));
    }

    public function editList($id)
    {
        $big_question=BigQuestion::find($id);
        // $question=Question::where('img')->get();
        return view('edit.editList', compact('big_question'));
    }

    // public function editImg($question_id)
    // {
    //     $question = Question::where('id', $question_id)->get();
    //     return view('edit.editList', compact('question'));
    // }

    public function updateList(Request $request, $id)
    {
        $big_question=BigQuestion::find($id);
        $big_question->title=$request->input('title');
        $big_question->save();
        //一覧表示画面にリダイレクト
        $big_questions = BigQuestion::orderby('id', 'asc')->get();
        return view('quiz.list', compact('big_questions'));
    }

    public function destroyList($id)
    {
        $big_question=BigQuestion::find($id);    
        $big_question->delete();    

        $big_questions = BigQuestion::orderby('id', 'asc')->get();
        return view('quiz.list', compact('big_questions'));
    }
}