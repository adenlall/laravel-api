<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Analytics;

use App\Http\Controllers\VisitsController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\Admin\SectionsController as AdminSectionController;

use App\Helpers\Visit;
use App\Helpers\FDataAPI;


Route::get('ping', function(){
		return response()->json(array("status"=>"ok","proof"=>"hello, world!"), 201);
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
				Route::post('/', [Visit::update(Request())]);
				Route::get('/routes', [VisitsController::class, 'get_routes']);
				Route::get('/times',  [VisitsController::class, 'get_times' ]);
		});
		Route::get('/quizzes', [VisitsController::class, 'get_quizzes']);
		Route::get('/goalorassist', [VisitsController::class, 'get_goalorassist']);
});

Route::prefix('section')->group(function () {
		
		Route::get ('/goalorassist'                  ,[SectionsController::class, 'goalorassist_all'   ]);
		Route::get ('/goalorassist/{index}'          ,[SectionsController::class, 'goalorassist_get'   ]);
		Route::post('/goalorassist/{index}'          ,[SectionsController::class, 'goalorassist_update']);

		Route::get ('/matchdaycard/get/codes'        ,function ()
		{
				$ff = new FDataAPI();
				return response()->json($ff->getCompitionsCodes(), 201);
		});
		Route::get ('/matchdaycard/get/compitions'   ,function ()
		{
				$ff = new FDataAPI();
				return response()->json($ff->getCompitionsData(), 201);
		});


		Route::get ('/matchdaycard/img/{img}'        ,[SectionsController::class, 'matchdaycard_image'           ]);
		Route::get ('/matchdaycard/{code}/{matchday}',[SectionsController::class, 'matchdaycard_get_matches'     ]);
		Route::get ('/matchdaycard/{code}/{match}'   ,[SectionsController::class, 'matchdaycard_get_match'       ]);
		Route::get ('/matchdaycard/{code}'           ,[SectionsController::class, 'matchdaycard_get_compition'   ]);
		Route::post('/matchdaycard/{code}'           ,[SectionsController::class, 'matchdaycard_post_comptition' ]);
		Route::post('/matchdaycard/{code}/{match}'   ,[SectionsController::class, 'matchdaycard_post_match'      ]);



		Route::get ('/quizzes'                       ,[SectionsController::class, 'quizzes_all'        ]);
		Route::get ('/quizzes/{index}'               ,[SectionsController::class, 'quizzes_get'        ]);
		Route::post('/quizzes/{index}'               ,[SectionsController::class, 'quizzes_update'     ]);
		
});


Route::prefix('admin')->group(function () {
		Route::prefix('quizzes')->group(function () {
				Route::get('/{id}/edit',   [AdminSectionController::class, 'edit_quizzes'  ]);
				Route::get('/{id}/delete', [AdminSectionController::class, 'delete_quizzes']);
				Route::get('/add',    [AdminSectionController::class, 'add_quizzes'   ]);
		});
		Route::prefix('goalorassist')->group(function () {
				Route::get('/{id}/edit',   [AdminSectionController::class, 'edit_goalorassist'  ]);
				Route::get('/{id}/delete', [AdminSectionController::class, 'delete_goalorassist']);
				Route::get('/add',    [AdminSectionController::class, 'add_goalorassist'   ]);
		});
});

