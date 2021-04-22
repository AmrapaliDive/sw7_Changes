<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\hostel;
use App\User;
use Auth;
use Hash;
use Mail;
use DB;
use App\Order;
use App\Admission;
use App\Franchisee;
use App\Product;
use App\Batch;
use Session;
use Carbon\Carbon;
use Cookie;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Input;

class hostelController extends Controller
{
    public function index()
		{
		  return view('student.hostel');
		}
	
	public function storeForHostel(Request $request)
		{
			
                $check = User::where('email', $request->input('email'))->get()->first();
				if($check !== null)
				{
					return redirect('/')->with('danger','Email Already Exists. Please Enter Another Email or Login.');
				}

				$user = new User();
				$user->email = $request->input('email');
				$user->role = 'student';

				//$hostel = new hostel();
				$name = $request -> input('name');
        $email = $request -> input('email');
        $dob = $request -> input('dob');
        $contact = $request -> input('contact');
        $father_name = $request -> input('father_name');
        $mother_name = $request -> input('mother_name');
        $permanent_address = $request -> input('permanent_address');
        $aadhar_no = $request -> input('aadhar_no');
        if($passport_image = $request->file('passport_image'))
        {
            $file1 = $request->file('passport_image');		
            $filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
            $file1->move(base_path().'/public/images/storage/students/', $filename1);
            $passport_image = '/images/storage/students/'.$filename1;
        }
            $data = DB::insert('insert into hostel (id,name,email,dob,contact,father_name,mother_name,permanent_address,aadhar_no,passport_image) values (?,?,?,?,?,?,?,?,?,?)',[null,$name,$email,$dob,$contact,$father_name,$mother_name,$permanent_address,$aadhar_no,$passport_image]);

		return redirect('/')->with('success', 'Details Successfully Inserted.');
						

					
					
			
			
	}
	
}
