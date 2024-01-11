<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Page;
use App\Models\Taxi;
use DB;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:driver');
    }
/*|-------------------------------- SETTINGS PAPGE ----------------------------------|*/
    public function setting(Taxi $taxi, Page $page, Request $request){      
        $url = 'driver';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','settings')->get();
        return view('driver.settings', compact('url','taxi','page'));
    }
/*|-------------------------------- SEARCH PAPGE ----------------------------------|*/
    public function search(Taxi $taxi, Page $page, Request $request){      
        $url = 'driver';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','search')->get();
        return view('driver.search', compact('url','taxi','page'));
    }
/*|-------------------------------- CALL PAPGE ----------------------------------|*/
    public function call(Taxi $taxi, Page $page, Request $request){      
        $url = 'driver';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','call')->get();
        return view('driver.call', compact('url','taxi','page'));
    }
/*|-------------------------------- ROUTES PAPGE ----------------------------------|*/
    public function route(Taxi $taxi, Page $page, Request $request){      
        $url = 'driver';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','routes')->get();
        return view('driver.routes', compact('url','taxi','page'));
    }


/*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Taxi $taxi, Page $page, Request $request){      
        $url = 'driver';
        
        $route = DB::table('taxis')
        ->join('owners','taxis.owner_id','=','owners.id')
        ->select('taxis.*','owners.name')
        ->where('status','route')
        ->get();

        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','profile')->get();
        return view('driver.index', compact('url','taxi','page'));
    }

    public function edit(Taxi $taxi, Page $page, Request $request){ 
        Taxi::find($taxi);
        $url = 'driver';
        $driver = Driver::first();
        $page = DB::table('pages')->where('active','profile')->get();
        return view('driver.taxi',compact('url','taxi','page'));
    }

    public function update(Taxi $taxi, Request $request){
        $url = 'driver';
        Taxi::find($taxi);
        $taxi->driver_id = $request->get('driver_id');
        $taxi->dailyRevenue = $request->get('dailyRevenue');
        $taxi->save();
        return redirect('driver');  
    }   
}
