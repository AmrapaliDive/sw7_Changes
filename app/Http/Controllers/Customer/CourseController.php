<?php

namespace App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Batch;
use App\Dealer;
use App\Customer;
use App\Admission;
use App\Student;
use App\Franchisee;
use App\website_setting;
use App\Wishlist;
use App\Order;
use App\Cart;
use App\User;
use Session;
use Mail;
use DB;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function courses(Request $request)
    {
        $batches = Batch::where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function all_courses(Request $request)
    {
        //$batches = Batch::where('status','Accepted')->get();
        return view('shop.all_courses');
    }

    public function serachCourses(Request $request)
    {
        $course = $request->get('course');
       
        $city = $request->get('city');
      
        $franchisee = Franchisee::where('city','LIKE','%'.$city.'%')->first();
      
        $batches = Batch::where('batch_name', 'LIKE', '%' .  $course . '%')->where('user_id',$franchisee->user_id)->get();
        //return $batches;
        
        return view('shop.searchCourses',['course'=>$course,'batches'=>$batches]);
    }

    public function course_select(Request $request,$course)
    {
        // $batches = Batch::where('batch_name', 'Laptop Repairing Course')->where('status','Accepted')->get();
        // return view('shop.batch',['batches' => $batches]);
        //$course ="Laptop Repairing Course";
        //return $course;
        return view('shop.searchCourses',['course'=>$course,'batches'=>null]);
    }

    public function laptop_repair(Request $request)
    {
        // $batches = Batch::where('batch_name', 'Laptop Repairing Course')->where('status','Accepted')->get();
        // return view('shop.batch',['batches' => $batches]);
        // $course ="Laptop Repairing Course";
        // return view('shop.searchCourses',['course'=>$course,'batches'=>null]);
    }

    public function mobile_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Mobile Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function printer_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Printer Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function lcd_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'LCD Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }
    public function cctv_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'CCTV Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function xerox_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Xerox Machine Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function ac_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'AC Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function freeze_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Freeze Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function washing_machine_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Washing Machine Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function motor_winding_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Motor Winding Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function hdd_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'HDD Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function grinder_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Grinder Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function fan_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Fan Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }
    
    public function cooler_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Cooler Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }
        
    public function owen_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Owen Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }
           
    public function elevator_repair(Request $request)
    {
        $batches = Batch::where('batch_name', 'Elevator Repairing Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function combo_course1(Request $request)
    {
        $batches = Batch::where('batch_name', 'Combo Course 1')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function combo_course2(Request $request)
    {
        $batches = Batch::where('batch_name', 'Combo Course 2')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function combo_course3(Request $request)
    {
        $batches = Batch::where('batch_name', 'Combo Course 3')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function hardware_course(Request $request)
    {
        $batches = Batch::where('batch_name', 'Computer Hardware Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    public function basic_electronic_course(Request $request)
    {
        $batches = Batch::where('batch_name', 'Basic Electronic Course')->where('status','Accepted')->get();
        return view('shop.batch',['batches' => $batches]);
    }

    // public function accessories(Request $request)
    // {
    //     $products = Product::where('type', 'Accessories')->get();
    //     return view('shop.product',['products' => $products]);
    // }

    public function enrolForAdmission(Request $request,$id)
    {
        $batch = Batch::where('id', $id)->first();
        if(Auth::user()->role=="customer")
        {
            return view('customer.enrolForAdmission',['batch' => $batch]);
        }
        else
        {
            return redirect('/')->with('error','Login with Customer Account for Student registration!!');
        }
    }

    public function enrolForAdmissionInsert(Request $request)
    {
        $batchid = $request->get('batchid');
       
        $batch = Batch::where('id', $batchid)->first();
      
        $batch_owner = User::where('id',$batch->user_id)->first();
        //return $batch_owner;
        $franchisee = Franchisee::where('user_id',$batch_owner->id)->first();
        //return $franchisee;
        if(Auth::user()->role=="customer")
        {
            $userid = Auth::user()->id;
            $student = new Student();
            $student->first_name = $request->get('first_name');
            $student->last_name = $request->get('last_name');
            $student->fathers_name = $request->get('fathers_name');
            $student->fathers_occupation = $request->get('fathers_occupation');
            $student->fathers_income = $request->get('fathers_income');
            $student->mothers_name = $request->get('mothers_name');
            $student->mothers_occupation = $request->get('mothers_occupation');
            $student->mothers_income = $request->get('mothers_income');
            $student->permanent_address = $request->get('permanent_address');
            $student->pincode = $request->get('pincode');
            $student->parent_contact = $request->get('parent_contact');
            $student->student_contact = $request->get('student_contact');
            $student->nationality = $request->get('nationality');
            $student->state = $request->get('state');
            $student->aadhar_no = $request->get('aadhar_no');
            $student->gender = $request->get('gender');

            $student->tenth_school = $request->get('tenth_school');
            $student->tenth_board = $request->get('tenth_board');
            $student->tenth_passingyear = $request->get('tenth_passingyear');
            $student->tenth_percentage = $request->get('tenth_percentage');

            $student->twelth_school = $request->get('twelth_school');
            $student->twelth_board = $request->get('twelth_board');
            $student->twelth_passingyear = $request->get('twelth_passingyear');
            $student->twelth_percentage = $request->get('twelth_percentage');

            $student->graduate_school = $request->get('graduate_school');
            $student->graduate_board = $request->get('graduate_board');
            $student->graduate_passingyear = $request->get('graduate_passingyear');
            $student->graduate_percentage = $request->get('graduate_percentage');

            if($request->file('tenth_doc'))
            {
                $file1 = $request->file('tenth_doc');		
                $filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
                $file1->move(base_path().'/public/images/storage/students/', $filename1);
                $student->tenth_doc = '/images/storage/students/'.$filename1;
            }
            if($request->file('twelth_doc'))
            {
                $file1 = $request->file('twelth_doc');		
                $filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
                $file1->move(base_path().'/public/images/storage/students/', $filename1);
                $student->twelth_doc = '/images/storage/students/'.$filename1;
            }
            if($request->file('graduate_doc'))
            {
                $file1 = $request->file('graduate_doc');		
                $filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
                $file1->move(base_path().'/public/images/storage/students/', $filename1);
                $student->graduate_doc = '/images/storage/students/'.$filename1;
            }
            $student->user_id = $userid;
            $student->save();
            
            $admission = new Admission();
            $admission->studnt_id = $student->id;
            $admission->franchisee_id = $franchisee->id;
            $admission->batch_id = $batch->id;
            $admission->course_name = $batch->batch_name;
            $admission->timetable = $batch->timetable;
            $admission->timeslot = $batch->timeslot;
            $admission->fee = $batch->course_final_fee;
            $mytime = Carbon::now();
            $admission->admission_date =$mytime->toDateTimeString();
            $admission->save();
            return redirect('/');
        }
        else
        {
            return redirect('/')->with('error','Login with Customer Account for Student registration!!');
        }
    }

    public function batchview(Request $request, $id)
    {
        $batch = Batch::where('id',$id)->where('status','Accepted')->first();
        return view('shop.batchview',['batch'=>$batch]);
    }

}
