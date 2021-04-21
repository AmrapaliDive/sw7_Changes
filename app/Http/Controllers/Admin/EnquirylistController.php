<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Enquiry;
use App\User;
use App\Batch;
use App\Franchisee;
use App\Student;
use App\Admission;
use Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class EnquirylistController extends Controller
{
    //
    public function index()
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
            {
                $enquiry = Enquiry::all();
                return view('admin.enquirylist', ['enquiry' => $enquiry]);
            }
            else
            {
                return redirect('/');
            }
    }

    public function delete_enquiry(Request $request,$id)
    {
        $enquiry = Enquiry::where('id',$id)->first();
        if($enquiry!=NULL){
            $enquiry->delete();
            //return redirect('admin/enquirylist');
            return redirect('admin/enquirylist')->with('success','Enquiry Record Deleted Successfully !!');
        }
        else
        {
           // return redirect('admin/enquirylist');
         return redirect('admin/enquirylist')->with('danger','Enquiry Record Can not be Deleted !!');
        }
    }
 
   
}
