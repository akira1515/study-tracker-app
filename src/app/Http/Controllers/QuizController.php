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
        $big_question=new BigQuestion();   
        $big_question->title=$request->input('title');
        $big_question->save();  
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
        return view('edit.editList', compact('big_question'));
    }

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