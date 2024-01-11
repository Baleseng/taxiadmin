<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Taxi;
use App\Models\User;
use DB;

class OwnerController extends Controller
{
     /**
  * Create a middleware instance.
  *
  * @return void
  */
    public function __construct()
    {
        $this->middleware('auth:owner');
    }

/*|-------------------------------- INDEX PAGE ----------------------------------|*/
    public function index(Request $request){
        $url = 'owner';
        
        $owner = DB::table('taxis')
        ->join('owners','taxis.owner_id','=','owners.id')
        ->select('taxis.*','owners.name')
        ->where('status','route')
        ->get();

        $unassign = DB::table('taxis')->where('status','unassigned')->get();
        $parked = DB::table('taxis')->where('status','queue')->get();
        $suspend = DB::table('taxis')->where('status','suspend')->get();
        $archived = DB::table('taxis')->where('status','archived')->get();
        $revenue = DB::table('taxis')->get();
        return view('owner/index', compact('url','owner','parked','suspend','archived','unassign','revenue'));
    }

/*|-------------------------------- ADD TAXI ----------------------------------|*/
    public function add(Taxi $taxi, Owner $owner){
        $url = 'owner';
        return view('owner.add', compact('url','taxi','owner'));
    }

    public function store(Taxi $taxi, Owner $owner, Request $request){
        $url = 'owner';
        Taxi::create(request(['model','registration','seater','status','driver','owner_id',]));
        return redirect('owner');
    }

/*|-------------------------------- TAXI INFO ----------------------------------|*/

    public function taxi(Taxi $taxi, Owner $owner, Request $request){ 
        $url = 'owner';
        Taxi::find($taxi);
        $owner = Owner::first();
        return view('owner.taxi',compact('url','taxi','owner'));
    }

/*|-------------------------------- EDITING IN DATABASE ----------------------------------|*/

    public function edit(Taxi $taxi, Owner $owner, Request $request){ 
        $url = 'owner';
        Taxi::find($taxi);
        $owner = Owner::first();
        return view('owner.edit',compact('url','taxi','owner'));
    }

    public function update(Taxi $taxi, Request $request){
        $url = 'owner';
        Taxi::find($taxi);
        $taxi->owner_id = $request->get('owner_id');
        $taxi->model = $request->get('model');
        $taxi->registration = $request->get('registration');
        $taxi->seater = $request->get('seater');
        $taxi->save(); 
        return redirect('owner');    
    }
}
