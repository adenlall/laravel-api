<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoalOrAssist;
use App\Models\Analytics;
use App\Models\Quizzes;
use App\Helpers\Visit;

use Illuminate\Support\Facades\Log;

class SectionsController extends Controller
{
		function goalorassist_get(Request $request,int $index)
		{
				try{
					Visit::update();
				  $data = GoalOrAssist::find($index);
				  return response()->json($data, 201);
				} catch (Exception $e) {
						Log::error('An error occurred: SectionsController@goalorassist_get ' . $e->getMessage());
						return response()->json(500);
				}
		}
		function goalorassist_update(Request $request,int $index)
		{
			try{
		    $validated = $request->validate([
						'answer'=> 'required|integer',
				]);
				$ana  = Analytics::find('goal_or_assists');
				$aval = json_decode($ana->value, true);
				if (isset($aval[$index])) {
						if ($request->answer===0||$request->answer===1) {
								$aval[$index][$request->answer]++;
						}else{
							return response()->json(404);
						}
				}else{
					$aval[$index] = array();
					if ($request->answer===0||$request->answer===1) {
							$aval[$index][$request->answer]++;
					}else{
						return response()->json(404);
					}
				}
				$ana->value = json_encode($aval);
				$ana->save();
				return response()->json($aval[$index], 201);
			} catch (Exception $e) {
					Log::error('An error occurred: SectionsController@goalorassist_update ' . $e->getMessage());
					return response()->json(500);
			}
		}
		function goalorassist_all(Request $request)
		{
			try{
				Visit::update();
				$data = Quizzes::get()->all();
				return response()->json($data, 201);
			} catch (Exception $e) {
				Log::error('An error occurred: SectionsController@goalorassist_all ' . $e->getMessage());
				return response()->json(500);
			}
		}
		/***************************************/
		function quizzes_get(Request $request, $index)
		{
			try {
				Visit::update();
				$data = Quizzes::find($index);
				return response()->json($data, 201);
			} catch (Exception $e) {
				Log::error('An error occurred: SectionsController@quizzes_get ' . $e->getMessage());
				return response()->json(500);
			}
		}
		function quizzes_update(Request $request, $index)
		{
			try{
		    $validated = $request->validate([
						'answer'=> 'required|integer',
				]);
				$ana  = Analytics::find('quizzes');
				$aval = json_decode($ana->value, true);
				if (isset($aval[$index])) {
						if ($request->answer>=0&&$request->answer<=3) {
								$aval[$index][$request->answer]++;
						}else{
							return response()->json(404);
						}
				}else{
					$aval[$index] = [0=>0,1=>0,2=>0,3=>0];
					if ($request->answer>=0 && $request->answer<=3) {
							$aval[$index][$request->answer]++;
					}else{
						return response()->json(404);
					}
				}
				$ana->value = json_encode($aval);
				$ana->save();
				return response()->json($aval[$index], 201);
			} catch (Exception $e) {
					Log::error('An error occurred: SectionsController@quizzes_update ' . $e->getMessage());
						return response()->json(500);
			}
		}
		function quizzes_all(Request $request)
		{
			try{
				Visit::update();
		    $data = Quizzes::all();
		    return response()->json(json_decode($data, true), 201);
			} catch (Exception $e) {
					Log::error('An error occurred: SectionsController@quizzes_all ' . $e->getMessage());
					return response()->json(500);
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
