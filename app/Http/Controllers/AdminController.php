<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Taxi;
use App\Models\Admin;
use App\Models\Owner;
use App\Models\Driver;
use App\Models\Page;
use DB;

class AdminController extends Controller
{
  /**
  * Create a middleware instance.
  *
  * @return void
  */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

/*|-------------------------------- INDEX PAPGE ----------------------------------|*/
    public function index(Request $request){      
        $url = 'admin';
        /*$route = DB::table('taxis')->where('status','route')->get();*/
        
        $owner = DB::table('taxis')
        ->Join('owners','taxis.owner_id','=','owners.id')
        ->select('taxis.*','owners.name')
        ->where('status','route')
        ->get();
        

        $unassign = DB::table('taxis')->where('status','unassigned')->get();
        $parked = DB::table('taxis')->where('status','queue')->get();
        $suspend = DB::table('taxis')->where('status','suspend')->get();
        $archived = DB::table('taxis')->where('status','archived')->get();
        $revenue = DB::table('taxis')->get();
        return view('admin/index', compact('url','owner','parked','suspend','archived','unassign','revenue'));
    }

/*|-------------------------------- TAXI INFO ----------------------------------|*/

    public function taxi(Taxi $taxi, Admin $admin, Request $request){
        $url = 'admin';
        Taxi::find($taxi);
        $admin = Admin::first();
        return view('admin.taxi', compact('url','taxi','admin'));
    }

/*|-------------------------------- EDITING IN DATABASE ----------------------------------|*/

    public function edit(Taxi $taxi, Admin $admin, Request $request){ 
        $url = 'admin';
        Taxi::find($taxi);
        $admin = Admin::first();
        return view('admin.edit',compact('url','taxi','admin'));
    }

    public function update(Taxi $taxi, Request $request){
        $url = 'owner';
        Taxi::find($taxi);
        $taxi->admin_id = $request->get('admin_id');
        $taxi->model = $request->get('model');
        $taxi->registration = $request->get('registration');
        $taxi->status = $request->get('status');
        $taxi->reason = $request->get('reason');
        $taxi->save();  
        return redirect('admin');    
    }

/*|-------------------------------- DELETING FROM DATABASE ----------------------------------|*/
    public function delete(Taxi $taxi){
        $url = 'admin';
        // Create an input & Save to database
        Taxi::find($taxi);
        $taxi->delete();
        // Redirect
        return back();
    }


/*|-------------------------------- ADD PAGE ----------------------------------|*/
    public function page(Page $page, Admin $admin){
        $url = 'admin';
        return view('admin.pages', compact('url','page','admin'));
    }

/*|-------------------------------- ADDING TO DATABASE ----------------------------------|*/
    public function store_page(Page $page, Admin $admin, Request $request){
        $url = 'admin';
        Page::create(request([
            'active',
        ]));
        // Redirect
        //return redirect()->to('news/upload');
        return redirect('admin');
    }
}
