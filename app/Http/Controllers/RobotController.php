<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RobotController extends Controller
{
    public function index(){
        $data = DB::table('robots')
                ->join('factions', 'robots.faction_id', '=', 'factions.id')
                ->select('robots.id', 'robots.name as robot_name', 'factions.name as faction_name')
                ->get();
        $robot = json_encode($data);
        return $robot;
    }
}
