<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class FDataAPI
{
    private $cacheTTL = 9000;
    private $comps = [
        "CL", "PL", "PD", "SA", "BL1", "FL1", "DED", "WC"
    ];

    public function getCompitionsCodes()
    {
        return $this->comps;
    }

    public function getMatch($id, $code, $matchday = null)
    {
    		if ($code && $matchday) {
    				$data = $this->getCompitionMatchs($code, $matchday);
    				if (!$data) {
    					return $data;
    				}
    				foreach ($data["matches"] as $match) {
    						if ($match["id"]===$id) {
    								return $match;
    						}
    				}
    				return false;
    		} else {
					return $this->fetch("matches/" . $id, 'match-' . $id);
				}
    }

    public function getCompitionsData()
    {
        $data = $this->getCompitionsCodes();
        $arr_ret = [];
        foreach ($data as $code) {
            $arr_ret[] = $this->getCompition($code);
        }
        return $arr_ret;
    }

    public function getCompition($code)
    {
        if ($this->code_validate($code)) {
            $data = $this->fetch("competitions/" . $code, $code);
            $this->save_image($data["emblem"], $code, "league");
            $this->save_image($data["area"]["flag"], $code, "flag");
            return $data;
        } else {
        		throw new \InvalidArgumentException($code." is to a valid competition code");
            return false;
        }
    }
    
    public function code_validate($code)
    {
        return in_array($code, $this->comps);
    }

    public function getCompitionMatchs($code, $matchday)
    {
    		$data = $this->getCompition($code);
        $data =  $this->fetch("competitions/" . $data["id"] . "/matches?matchday=" . $matchday, "matches-" . $data["id"] . "-" . $matchday);
        if(!isset($data["matches"])){
        	return false;
        }
        foreach ($data["matches"] as $match) {
            $this->save_image($match["homeTeam"]["crest"], $match["homeTeam"]["id"], "club");
            $this->save_image($match["awayTeam"]["crest"], $match["awayTeam"]["id"], "club");
        }
        return $data;
    }

    private function fetch($endpoint, $key)
    {
      $data = Cache::remember($key, $this->cacheTTL, function () use ($endpoint) {
        $headers = [
            'X-Auth-Token' => env('FOOTBALL_DATA_API_TOKEN'),
        ];
        $response = Http::withHeaders($headers)->get(env("FOOTBALL_DATA_API_URI") . $endpoint);
        $data = $response->json();
        return $data;
      });
      return $data;
    }
    
    private function save_image($url, $name, $prefix)
    {
        if ($url && $name && $prefix && !Storage::exists('sections/mdc/' . $name."-".$prefix.".png")) {
							$response = Http::get($url);
							if ($response->successful()) {
									$fileName = $name.'-'.$prefix.'.png';
									$filePath = 'sections/mdc/' . '/' . $fileName;
									Storage::put($filePath, $response->body());
									return true;
							}
							return false;
        }
        return true;
    }


}

