<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Hostel;
use App\User;
use App\Batch;
use App\Franchisee;
use App\Student;
use App\Admission;
use Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class HostelListController extends Controller
{
    //
    public function index()
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
            {
                $hostels = Hostel::all();
                return view('admin.hostellist', ['hostels' => $hostels]);
            } 
            else
            {
                return redirect('/');
            }
    }

    public function delete_hostel(Request $request,$id)
    {
        $hostels = Hostel::where('id',$id)->first();
        if($hostels!=NULL){
            $hostels->delete();
            //return redirect('admin/enquirylist');
            return redirect('/hostellist')->with('success','Hostel Record Deleted Successfully !!');
        }
        else
        {
           // return redirect('admin/enquirylist');
         return redirect('/hostellist')->with('danger','Hostel Record Can not be Deleted !!');
        }
    }
 
   
}
