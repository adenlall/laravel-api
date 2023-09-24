<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\GoalOrAssist;
use App\Http\Models\Analytics;
use App\Http\Models\Quizzes;
use App\Helpers\Visit;

use Illuminate\Support\Facades\Log;

class SectionsController extends Controller
{
		function goalorassist_get(Request $request, $index)
		{
				try{
					Visit::update();
				  $data = GoalOrAssist::find($index);
				  return response()->json(json_decode($data), 201);
				} catch (Exception $e) {
						Log::error('An error occurred: SectionsController@goalorassist_get ' . $e->getMessage());
						return 500;
				}
		}
		function goalorassist_update(Request $request, $index)
		{
			try{
			
		    $validated = $request->validate([
						'value' => 'required'        ,
						'answer'=> 'required|integer',
				]);
				$ana  = Analytics::find('goal_or_assists');
				$aval = json_decode($ana->value);
				if (isset($aval[$index])) {
						if ($request->answer===0||$request->answer===1) {
								$aval[$index][$request->answer]++;
						}
				}else{
					$aval[$index] = array();
					if ($request->answer===0||$request->answer===1) {
							$aval[$index][$request->answer]++;
					}
				}
				return response()->json(json_decode($data), 201);
			} catch (Exception $e) {
					Log::error('An error occurred: SectionsController@goalorassist_update ' . $e->getMessage());
					return 500;
			}
		}
		function goalorassist_all(Request $request)
		{
			try{
			
				Visit::update();
		    $data = Quizzes::all();
		    return response()->json(json_decode($data), 201);
			} catch (Exception $e) {
				Log::error('An error occurred: SectionsController@goalorassist_all ' . $e->getMessage());
				return 500;
			}
		}
		/***************************************/
		function quizzes_get(Request $request, $index)
		{
			try {
				Visit::update();
		    $data = Quizzes::find($index);
		    return response()->json(json_decode($data), 201);
			} catch (Exception $e) {
				Log::error('An error occurred: SectionsController@quizzes_get ' . $e->getMessage());
				return 500;
			}
		}
		function quizzes_update(Request $request, $index)
		{
				try{
						$validated = $request->validate([
								'value' => 'required'        ,
								'answer'=> 'required|integer',
						]);
						$ana  = Analytics::find('quizzes');
						$aval = json_decode($ana->value);
						if (isset($aval[$index])) {
								if ($request->answer>=0 && $request->answer<=3) {
										$aval[$index][$request->answer]++;
								}
						}else{
							$aval[$index] = array();
							if ($request->answer>=0 && $request->answer<=3) {
									$aval[$index][$request->answer]++;
							}
						}
					return response()->json(json_decode($data), 201);
				} catch (Exception $e) {
					Log::error('An error occurred: SectionsController@quizzes_update ' . $e->getMessage());
					return 500;
				}
		}
		function quizzes_all(Request $request)
		{
			try{
				Visit::update();
		    $data = Quizzes::all();
		    return response()->json(json_decode($data), 201);
			} catch (Exception $e) {
					Log::error('An error occurred: SectionsController@quizzes_all ' . $e->getMessage());
					return 500;
			}
		}
		/***************************************/
		function matchdaycard_get(Request $request, string $code, string $matchday)
		{
				
				
		}
		function matchdaycard_post(Request $request, string $code)
		{
				
				
		}
		/***************************************/
		
}
