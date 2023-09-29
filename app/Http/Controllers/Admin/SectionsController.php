<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\GoalOrAssist;
use App\Models\Analytics;
use App\Models\Quizzes;

use App\Http\Controllers\Controller;


class SectionsController extends Controller
{

	function edit_quizzes(Request $request, int $id){
			
			$validated = $request->validate([
					'body'=> ['required']
			]);
			
			$data = json_decode($request->body, true);
			
			$rules = [
					"title"     => ["required", "string","max:30" ],
					"question"  => ["required", "string","max:110"],
					"answers"   => ["required", "array:0,1,2,3"   ],
					"answers.0" => ["required", "string", "max:25"],
					"answers.1" => ["required", "string", "max:25"],
					"answers.2" => ["required", "string", "max:25"],
					"answers.3" => ["required", "string", "max:25"],
					"correct"   => ["required", "integer","max:3" ]
			];
			if(isset($data)) {
					$validator = Validator::make($data, $rules);
					if ($validator->passes()) {
							$quiz = Quizzes::find($id);
							$quiz->value = json_encode($data);
							$quiz->save();
							return response()->json(["status"=>"ok"], 201);
					} else {
							return response()->json(["error"=>"parsing request body error", "details"=>$validator->errors()->all()], 504);
					}
			} else {
					return response()->json(["error"=>"enter a valid json body"], 501);
			}
	}

	function add_quizzes (Request $request) {
			
			$validated = $request->validate([
					'body'=> ['required']
			]);
			$data = json_decode($request->body, true);
			
			$rules = [
					"title"     => ["required", "string","max:30" ],
					"question"  => ["required", "string","max:110"],
					"answers"   => ["required", "array:0,1,2,3"   ],
					"answers.0" => ["required", "string", "max:25"],
					"answers.1" => ["required", "string", "max:25"],
					"answers.2" => ["required", "string", "max:25"],
					"answers.3" => ["required", "string", "max:25"],
					"correct"   => ["required", "integer","max:3" ]
			];
			
			if(isset($data)) {
					$validator = Validator::make($data, $rules);
					if ($validator->passes()) {
							$goa = Quizzes::create([
								"value" => json_encode($data)
							]);
							return response()->json(["status"=>"ok"], 201);
					} else {
							return response()->json(["error"=>"parsing request body error", "details"=>$validator->errors()->all()], 504);
					}
			} else {
					return response()->json(["error"=>"enter a valid json body"], 501);
			}
	}
	
	function delete_quizzes (Request $request, int $id) {
					$goa = Quizzes::find($id);
					if ($goa) {
							$goa->delete();
							return response()->json(["status"=>"ok"], 201);
					} else {
							return response()->json(["error"=>"no Quiz with whis id was found!"], 404);
					}
	}

/*********************************************/
/*********************************************/
/*********************************************/

	function edit_goalorassist (Request $request, int $id) {
			
			$validated = $request->validate([
					'body'=> ['required']
			]);
			$data = json_decode($request->body, true);
			$rules = [
				"title" => ["required", "string","max:30"],
				"question" => ["required", "string","max:230"],
				"answers" => [
					0=>["required", "string", "max:130" ],
					1=>["required", "string", "max:130" ]
				]
			];
			if(isset($data)) {
					$validator = Validator::make($data, $rules);
					if ($validator->passes()) {
							$goa = GoalOrAssist::find($id);
							$goa->value = json_encode($data);
							$goa->save();
							return response()->json(["status"=>"ok"], 201);
					} else {
							return response()->json(["error"=>"parsing request body error", "details"=>$validator->errors()->all()], 504);
					}
			} else {
					return response()->json(["error"=>"enter a valid json body"], 501);
			}
	}

	function add_goalorassist (Request $request) {
			
			$validated = $request->validate([
					'body'=> ['required']
			]);
			$data = json_decode($request->body, true);
			$rules = [
				"title" => ["required", "string","max:30"],
				"question" => ["required", "string","max:230"],
				"answers" => [
					0=>["required", "string", "max:130"],
					1=>["required", "string", "max:130"]
				]
			];
			if(isset($data)) {
					$validator = Validator::make($data, $rules);
					if ($validator->passes()) {
							$goa = GoalOrAssist::create([
								"value" => json_encode($data)
							]);
							return response()->json(["status"=>"ok"], 201);
					} else {
							return response()->json(["error"=>"parsing request body error", "details"=>$validator->errors()->all()], 504);
					}
			} else {
					return response()->json(["error"=>"enter a valid json body"], 501);
			}
	}

	function delete_goalorassist (Request $request, int $id) {
					$goa = GoalOrAssist::find($id);
					if ($goa) {
							$goa->delete();
							return response()->json(["status"=>"ok"], 201);
					} else {
							return response()->json(["error"=>"no GoalOrAssist with whis id was found!"], 404);
					}
	}


}
