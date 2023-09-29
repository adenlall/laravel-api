<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Analytics;


class VisitsController extends Controller
{
		public function get_routes()
		{
				$query = Analytics::find('visits');
				$data  = json_decode($query->value, true);
				return response()->json($data['routes'], 201);
		}
		public function get_times()
		{
				$query = Analytics::find('visits');
				$data  = json_decode($query->value, true);
				return response()->json($data['times'], 201);
		}
		public function reset()
		{
				$query = Analytics::find('visits');
		    $query->value = json_encode(array(
					"total"=>0,
					"routes"=>array(),
					"times"=>array()
				));
				$query->save();
		}
}
