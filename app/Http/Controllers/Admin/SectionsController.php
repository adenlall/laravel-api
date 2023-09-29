<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
	function edit_quizzes(Request $request, int $id){
			
			$data = json_decode($request->body, true);
			$rules = [
					'name' => 'digits:8', //Must be a number and length of value is 8
					'age' => 'digits:8'
			];
			$rules = [
          "title" => "Football Legends", 
          "question" => "Who is often referred to as the 'Flea' and is considered one of the greatest footballers of all time?", 
          "answers" => [
             "Lionel Messi", 
             "Cristiano Ronaldo", 
             "Neymar", 
             "Andres Iniesta" 
          ], 
          "correct" => 0 
       ]

			$validator = Validator::make($data, $rules);
			if ($validator->passes()) {
					//TODO Handle your data
			} else {
					//TODO Handle your error
					dd($validator->errors()->all());
			}
			
	}
}
