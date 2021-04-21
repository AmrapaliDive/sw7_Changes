<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Userblogs;
use App\Tag;
use App\User;
use Hash;

class UserblogsController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */

	 public function index()
	{
		if(Auth::check() && (Auth::user()->email == 'admin@gmail.com'))
		{
		$blogs = Userblogs::all();
        return view('admin.userblogs', ['blogs' => $blogs]);
	    }
		else {
		return redirect('/admin');
		}

	}

	public function create()
    {
		if(Auth::check() && (Auth::user()->email == 'admin@gmail.com'))
		{
        return view('admin.userblogsform');
	    }
		else {
		return redirect('/admin');
		}
    }

    public function insert(Request $request)
    {
		if(Auth::check() && (Auth::user()->email == 'admin@gmail.com'))
		{
        $blog = new Userblogs();
        $blog->title = $request->input('title');
        $blog->caption = $request->input('summernote');
    	$blog->shortdescription = $request->input('caption');
        $file = $request->file('imagefile');


				$filename = md5_file($file->path()).'.'.$file->getClientOriginalExtension();
        $file->move(base_path().'/public/images/storage/blogs/', $filename);

        $blog->path = '/images/storage/blogs/'.$filename;
		$blog->save();
		//    $blog->rating = 0;

        //$tagsselect = $request->input('tagsselect');
       // $request->user()->blogs()->save($blog);

        // $tagslist = array();

        // foreach ($tagsselect as $tagrequest)
        // {
        //     $tag = Tag::where('tag', $tagrequest)->first();
        //     if($tag === null)
        //     {
        //         $newtag = new Tag();
        //         $newtag->tag = $tagrequest;
        //         $newtag->save();
        //         array_push($tagslist, $newtag->id);
        //     }
        //         else
        //     {
        //         array_push($tagslist, $tag->id);
        //     }
        // }
        // $blog->tags()->attach($tagslist);
        return redirect('/admin/userblogs/')->with('success', 'Userblog has been successfully created');
	}
	else {
	return redirect('/admin');
	}

	}

    public function edit($id)
    {
		if(Auth::check() && (Auth::user()->email == 'admin@gmail.com'))
		{
		$blog = Userblogs::find($id);
		if(!empty($blog))
			return view('admin.userblogsform', ['blog' => $blog]);
		else
			return redirect('/admin/userblogs')->with('danger', 'Userblog not found');
    }
	else {
	return redirect('/admin');
	}

}

    public function update(Request $request, $id)
    {
		if(Auth::check() && (Auth::user()->email == 'admin@gmail.com'))
		{
		$blog = Userblogs::find($id);
		if(empty($blog))
			return redirect('/admin/userblogs/')->with('danger', 'Userblog not found');

		$blog->title = $request->input('title');
		$blog->caption = $request->input('summernote');
		$blog->shortdescription = $request->input('caption');
		if($request->hasFile('imagefile'))
		{
			$file = $request->file('imagefile');
			$filename = md5_file($file).'.'.$file->getClientOriginalExtension();
			$file->move(base_path().'/public/images/storage/blogs/', $filename);

			$blog->path = '/images/storage/blogs/'.$filename;
		}

		// $blog->tags()->detach();
		// $tagsselect = $request->input('tagsselect');
		//$request->user()->blogs()->save($blog);
		$blog->save();
		// $tagslist = array();

		// foreach ($tagsselect as $tagrequest)
		// {
		// 	$tag = Tag::where('tag', $tagrequest)->first();
		// 	if($tag === null)
		// 	{
		// 		$newtag = new Tag();
		// 		$newtag->tag = $tagrequest;
		// 		$newtag->save();
		// 		array_push($tagslist, $newtag->id);
		// 	}
		// 	else
		// 	{
		// 		array_push($tagslist, $tag->id);
		// 	}
		// }
		// $blog->tags()->attach($tagslist);
		return redirect('/admin/userblogs')->with('success', 'blog has been successfully Updated');
    }
	else {
	return redirect('/admin');
	}
}

    public function delete($id)
    {
		if(Auth::check() && (Auth::user()->email == 'admin@gmail.com'))
		{
		$blog = Userblogs::find($id);
		//$blog->tags()->detach();
		$blog->delete();
		return redirect('/admin/userblogs/')->with('success', 'blog has been successfully Deleted');
        }
		else {
		return redirect('/admin');
		}

   }
}
