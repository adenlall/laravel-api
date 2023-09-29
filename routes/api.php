<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Analytics;

use App\Http\Controllers\VisitsController;
use App\Http\Controllers\SectionsController;

use App\Helpers\Visit;


Route::get('test', function(){
		return response()->json(array("hello"=>"world!"), 201);
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('analytics')->group(function () {
		Route::get('/all', function () {
				return Analytics::all();
		});
		Route::prefix('visits')->group(function () {
				Route::get('/test', function () {
				    return response()->json(array("ok"), 200);
				});
				Route::post('/', [Visit::update(Request())]);
				Route::get('/routes', [VisitsController::class, 'get_routes']);
				Route::get('/times',  [VisitsController::class, 'get_times' ]);
		});
});

Route::prefix('section')->group(function () {
		
		Route::get ('/goalorassist',                  [SectionsController::class, 'goalorassist_all'   ]);
		Route::post('/goalorassist/{index}',          [SectionsController::class, 'goalorassist_update']);
		Route::get ('/goalorassist/{index}',          [SectionsController::class, 'goalorassist_get'   ]);
		
		Route::get ('/matchdaycard/{code}/{matchday}',[SectionsController::class, 'matchdaycard_get'   ]);
		Route::post('/matchdaycard/{code}',           [SectionsController::class, 'matchdaycard_update']);
		
		Route::get ('/quizzes',                       [SectionsController::class, 'quizzes_all'        ]);
		Route::get ('/quizzes/{index}',               [SectionsController::class, 'quizzes_get'        ]);
		Route::post('/quizzes/{index}',               [SectionsController::class, 'quizzes_update'     ]);
		
});
