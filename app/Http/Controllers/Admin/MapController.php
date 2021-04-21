<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Hash;
use App\Map;
use App\Tag;
use App\User;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\MapController;

class MapController extends Controller
{
	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::all();
        return view('admin.maplist',['maps'=>$maps]);
    }

    public function create()
    {
        return view('admin.mapform');
    }
        
    public function insert(Request $request)
    {	 
      
        $maps = new Map();
        $maps->location =  $request->input('location'); 
        $maps->save();
        return redirect('/admin/map')->with('success', 'Location has been successfully added');
    }

    public function edit($id)
    {
       
            $maps = Map::find($id);
            if(!empty($maps))
            {
               return view('admin.mapform', ['maps' => $maps]);
            }
            else
            {
                return redirect('admin/map')->with('danger','Location not found.');
            }
    }


    public function update(Request $request, $id)
    {
            $maps = Map::find($id);
            if(empty($maps))
            {
               return redirect('admin/map')->with('danger', 'Location not found');
            }
            else 
            {
                 
            $maps->location =  $request->input('location');
            $maps->save();
            return redirect('admin/map')->with('success', 'Location has been successfully Updated');
            }
      
    }

}
