<?php

namespace App\Http\Controllers;
use App\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){
        return view('Questions.questions');
    }


    public function createquestions(Request $request){
       
        // echo 'here';
        // die;
        $questions= new Questions ([
            'id' => null,
            'categories_id' ,
            'counselor_id',
            'question_type'=> $request->categories,
            'questions'=>$request->questions
        ]);

        $questions->save();
        }
}
