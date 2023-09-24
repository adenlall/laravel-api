<?php
use App\Http\Models\Analytics;

class Visit
{
    function __construct(argument)
    {
        
    }
    /*
    function update(){
				
				
				$dd = new DateTime();
				$day = $dd->format('w');
				$week = ceil($dd->format('d') / 7);
				$month = $dd->format('n');
				$year = $dd->format('Y');
				
				if (!isset($data['times'][$year])) {
						$data['times'][$year] = [
								[
										'number' => $month,
										'days' => [
												[
														'day' => $day,
														'visits' => 1
												]
										]
								]
						];
				} else {
						$exMonth = true;
						$data['times'][$year]['visits']++;
						for ($i = 0; $i < count($data['times'][$year]); $i++) {
								if ($data['times'][$year][$i]['number'] === $month) {
										$data['times'][$year][$i]['visits']++;
										$exMonth = false;
										$eXday = true;
										for ($x = 0; $x < count($data['times'][$year][$i]['days']); $x++) {
												if ($data['times'][$year][$i]['days'][$x]['day'] === $day) {
														$eXday = false;
														$data['times'][$year][$i]['days'][$x]['visits']++;
												}
										}
										if ($eXday) {
												$data['times'][$year][$i]['days'][] = [
														'day' => $day,
														'visits' => 1
												];
										}
								}
						}
						if ($exMonth) {
								$data['times'][$year][] = [
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
    }
    */
    
    static public function update() {
    
    			$query = Analytics::find('visits');
    			$data  = json_decode($query->value);
    			
    			$data->total++;
    			
					$dd = new DateTime();
					$day = $dd->format('w');
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
						          foreach ($monthData['days'] as &$dayData) {
						              if ($dayData['day'] === $day) {
						                  $dayData['visits']++;
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
					$query->value = json_encode($data);
					$query->save();
			}

    
}
