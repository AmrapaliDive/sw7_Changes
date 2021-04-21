<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Slider;
use App\Tag;
use App\User;
use Hash;

class SliderController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */


	public function index()
	{
		if(Auth::check() && (Auth::user()->role == 'admin'))
		{
		$sliders = Slider::paginate(10);
        return view('admin.sliders', ['sliders' => $sliders]);
	    }
		else {
		return redirect('/admin');
		}
	}

	public function create()
    {
		if(Auth::check() && (Auth::user()->role == 'admin'))
		{
        return view('admin.slidersform');
	    }

		else {
		return redirect('/admin');
		}
	}


    public function insert(Request $request)
    {
		if(Auth::check() && (Auth::user()->role == 'admin'))
		{
		$userid = Auth::user()->id;
		$image = new Slider();
        $image->ranking = $request->input('ranking');
    

        $file = $request->file('imagefile');

        $filename = md5_file($file->path()).'.'.$file->getClientOriginalExtension();
        $file->move(base_path().'/public/images/storage/sliders/', $filename);

        $image->path = '/images/storage/sliders/'.$filename;

	    $image->rating = 0;
		$image->user_id = $userid;	
      	 $image->save();
       // $request->user()->images()->save($image);

        return redirect('/admin/slider')->with('success', 'Slider has been successfully created');
	}

	else {
	return redirect('/admin');
	}

	}

   public function delete($id)
    {
		if(Auth::check() && (Auth::user()->role == 'admin'))
		{
		$image = Slider::find($id);
		$image->delete();
		
		
		return redirect('/admin/slider/')->with('success', 'Article has been successfully Deleted');
	    }
		else {
		return redirect('/admin');
		}
	}
}
