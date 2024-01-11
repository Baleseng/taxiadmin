<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marshall;
use App\Models\User;
use App\Models\Taxi;
use App\Models\Page;
use DB;

class MarshallController extends Controller
{
     /**
  * Create a middleware instance.
  *
  * @return void
  */
    public function __construct()
    {
        $this->middleware('auth:marshall');
    }

/*|-------------------------------- SETTINGS PAPGE ----------------------------------|*/
    public function setting(Taxi $taxi, Page $page, Request $request){      
        $url = 'marshall';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','settings')->get();
        return view('marshall.settings', compact('url','taxi','page'));
    }
/*|-------------------------------- ROUTES PAPGE ----------------------------------|*/
    public function route(Taxi $taxi, Page $page, Request $request){      
        $url = 'marshall';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','routes')->get();
        return view('marshall.routes', compact('url','taxi','page'));
    }
/*|-------------------------------- CALLS PAPGE ----------------------------------|*/
    public function call(Taxi $taxi, Page $page, Request $request){      
        $url = 'marshall';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','calls')->get();
        return view('marshall.calls', compact('url','taxi','page'));
    }
/*|-------------------------------- CALLS PAPGE ----------------------------------|*/
    public function search(Taxi $taxi, Page $page, Request $request){      
        $url = 'marshall';
        $taxi = Taxi::get();
        $page = DB::table('pages')->where('active','search')->get();
        return view('marshall.search', compact('url','taxi','page'));
    }

/*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Taxi $taxi, Page $page, Request $request){      
        
        $url = 'marshall';
        $taxi = DB::table('taxis')->where('status','queue')->get();
        $page = DB::table('pages')->where('active','profile')->get();
        return view('marshall/index', compact('url','taxi','page'));
    }

/*|-------------------------------- EDITING IN DATABASE ----------------------------------|*/

    public function edit(Taxi $taxi, Page $page, Marshall $admin, Request $request){ 
        Taxi::find($taxi);
        $url = 'marshall';
        $marshall = Marshall::first();
        $page = DB::table('pages')->where('active','taxi')->get();
        return view('marshall.taxi',compact('url','taxi','marshall','page'));
    }

    public function update(Taxi $taxi, Request $request){
        Taxi::find($taxi);
        $url = 'marshall';
        $taxi->marshall_id = $request->get('marshall_id');
        $taxi->status = $request->get('status');
        $taxi->save();
        return redirect('marshall');    
    }


}
