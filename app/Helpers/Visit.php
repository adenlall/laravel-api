<?php
namespace App\Helpers;

use App\Models\Analytics;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class Visit
{
    
    
    
		static public function update(Request $request) {

					$query = Analytics::find('visits');
					$data  = json_decode($query->value, true);

					$data["total"]++;

					$dd = new Carbon();
					$day = $dd->format('d');
					$week = ceil($dd->format('d') / 7);
					$month = $dd->format('n');
					$year = $dd->format('Y');
					if (!isset($data['times'][$year])) {
							$data['times'][$year] = [
									'visits' => 1,
									'months' => [
											[
													'number' => $month,
													'visits' => 1,
													'days' => [
															[
																	'day' => $day,
																	'visits' => 1
															]
													]
											]
									]
							];
					} else {
						$exMonth = false;
						$data['times'][$year]['visits']++;
						foreach ($data['times'][$year]['months'] as &$monthData) {
								if ($monthData['number'] === $month) {
										$monthData['visits']++;
										$exDay = false;
										for ($y = 0; $y < count($monthData['days']); $y++) {
												if ($monthData['days'][$y]['day'] === $day) {
														$monthData['days'][$y]['visits']++;
														$exDay = true;
														break;
												}
										}
										if (!$exDay) {
												$monthData['days'][] = [
														'day' => $day,
														'visits' => 1
												];
										}
										$exMonth = true;
										break;
								}
						}
						if (!$exMonth) {
								$data['times'][$year]['months'][] = [
										'number' => $month,
										'visits' => 1,
										'days' => [
												[
														'day' => $day,
														'visits' => 1
												]
										]
								];
						}
					}
					
					if (isset($request->route)) {
							if (isset($data["routes"][$request->route])) {
							    $data["routes"][$request->route]++;
							}else{
								$data["routes"][$request->route] = 1;
							}
					}
					$query->value = json_encode($data);
					$query->save();
					
					return;
			}

    
}
