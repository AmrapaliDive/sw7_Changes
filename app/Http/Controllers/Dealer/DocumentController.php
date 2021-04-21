<?php

namespace App\Http\Controllers\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Dealer;
use App\User;
use App\Document;
use Auth;
use Hash;

class DocumentController extends Controller
{
	 public function index()
	{
		return view('dealer.document');
	}

	public function insert(Request $request)
    {
		
		$documents = new Document();
		$documents->user_id = Auth::user()->id;

		$documents->idproof = $request->input('idproof');

		$file1 = $request->file('idproof_pdf');		
		$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
        $file1->move(base_path().'/public/images/storage/documents/', $filename1);
		$documents->idproof_pdf = '/images/storage/documents/'.$filename1;
		
		$documents->residence_document = $request->input('residence_document');

		$documents->gst_number = $request->input('gst_number');

	    $file3 = $request->file('gst_pdf');
    	$filename3 = md5_file($file3->path()).'.'.$file3->getClientOriginalExtension();
        $file3->move(base_path().'/public/images/storage/documents/', $filename3);
		$documents->gst_pdf = '/images/storage/documents/'.$filename3;

		$documents->shopact_number = $request->input('shopact_number');

	    $file3 = $request->file('shopact_pdf');
    	$filename3 = md5_file($file3->path()).'.'.$file3->getClientOriginalExtension();
        $file3->move(base_path().'/public/images/storage/documents/', $filename3);
		$documents->shopact_pdf = '/images/storage/documents/'.$filename3;
		
		$documents->save();
        return redirect('/account')->with('success', 'Document has been uploaded successfully.');

	}

    


}
