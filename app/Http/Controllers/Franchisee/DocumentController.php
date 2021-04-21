<?php

namespace App\Http\Controllers\Franchisee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Franchisee;
use App\User;
use App\Document;
use Auth;
use Hash;

class DocumentController extends Controller
{
	 public function index()
	{
		return view('franchisee.document');
	}

	public function insert(Request $request)
    {
		
		$documents = new Document();
		$documents->user_id = Auth::user()->id;

		$documents->pan_no = $request->input('pan_no');

		$file1 = $request->file('pan_pdf');		
		$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
        $file1->move(base_path().'/public/images/storage/documents/', $filename1);
		$documents->pan_pdf = '/images/storage/documents/'.$filename1;
		
		$documents->aadhar_no = $request->input('aadhar_no');

		$file1 = $request->file('aadhar_pdf');		
		$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
        $file1->move(base_path().'/public/images/storage/documents/', $filename1);
		$documents->aadhar_pdf = '/images/storage/documents/'.$filename1;

		$documents->gst_number = $request->input('gst_number');

	    $file3 = $request->file('gst_pdf');
    	$filename3 = md5_file($file3->path()).'.'.$file3->getClientOriginalExtension();
        $file3->move(base_path().'/public/images/storage/documents/', $filename3);
		$documents->gst_pdf = '/images/storage/documents/'.$filename3;

		$documents->shopack_number = $request->input('shopack_number');

	    $file3 = $request->file('showpack_pdf');
    	$filename3 = md5_file($file3->path()).'.'.$file3->getClientOriginalExtension();
        $file3->move(base_path().'/public/images/storage/documents/', $filename3);
		$documents->showpack_pdf = '/images/storage/documents/'.$filename3;
		
		$documents->save();
        return redirect('/account')->with('success', 'Document has been uploaded successfully.');

	}

    


}
