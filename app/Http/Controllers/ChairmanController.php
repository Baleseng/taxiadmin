<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxi;
use App\Models\Chairman;
use DB;

class ChairmanController extends Controller
{
    /**
  * Create a middleware instance.
  *
  * @return void
  */
    public function __construct()
    {
        $this->middleware('auth:chairman');
    }

    /*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Request $request){      
        $url = 'chairman';

        $owner = DB::table('taxis')
        ->join('owners','taxis.owner_id','=','owners.id')
        ->select('taxis.*','owners.*')
        ->where('status','route')
        ->get();

        $unassign = DB::table('taxis')->where('status','unassigned')->get();
        $parked = DB::table('taxis')->where('status','queue')->get();
        $suspend = DB::table('taxis')->where('status','suspend')->get();
        $archived = DB::table('taxis')->where('status','archived')->get();
        $revenue = DB::table('taxis')->get();
        return view('chairman/index', compact('url','owner','parked','suspend','archived','unassign','revenue'));
    }

    /*|-------------------------------- TAXI INFO ----------------------------------|*/
    public function taxi(Taxi $taxi, Chairman $chairman, Request $request){ 
        $url = 'chairman';
        Taxi::find($taxi);
        $chair = Chairman::first();
        return view('chairman.taxi',compact('url','taxi','chairman'));
    }

    /*|-------------------------------- EDIT TAXI INFO ----------------------------------|*/
    public function edit(Taxi $taxi, Request $request){ 
        Taxi::find($taxi);
        $url = 'chairman';
        $chair = Chairman::first();
        return view('chairman.edit',compact('url','taxi'));
    }

    public function update(Taxi $taxi, Request $request){
        $url = 'chairman';
        Taxi::find($taxi);
        $taxi->chair_id = $request->get('chair_id');
        $taxi->association = $request->get('association');
        $taxi->save(); 
        return redirect('chairman');  
    }
}
