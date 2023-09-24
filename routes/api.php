<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Analytics;

use App\Http\Controllers\VisitsController;
use App\Http\Controllers\SectionsController;
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
			
				Route::post('/', [VisitsController::class, 'update']);
				
				Route::get('/', function() {
						return Article::where('key', 'visits')->first();
				});
				Route::get('/routes', [VisitsController::class, 'routes']);
				Route::get('/times', [VisitsController::class, 'times']);
			
		});
		
		
});
 
Route::prefix('section')->group(function () {
		
		Route::get ('/goalorassist',         [SectionsController::class, 'goalorassist_all' ]);
		Route::post('/goalorassist/{index}', [SectionsController::class, 'goalorassist_post']);
		Route::get ('/goalorassist/{index}', [SectionsController::class, 'goalorassist_get' ]);
		
		Route::get('/matchdaycard/{code}/{matchday}', [SectionsController::class, 'matchdaycard_get']);
		Route::post('/matchdaycard/{code}',           [SectionsController::class, 'matchdaycard_post']);
		
		Route::get ('/quizzes',          [SectionsController::class, 'quizzes_all' ]);
		Route::get ('/quizzes/{index}',  [SectionsController::class, 'quizzes_get' ]);
		Route::post('/quizzes/{index}',  [SectionsController::class, 'quizzes_post']);
		
	
});
