<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\User;
use App\Student;
use App\Franchisee;
use App\Admission;
use App\Document;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
            {
                $students = Student::all();
                return view('admin.studentlist', ['students' => $students]);
            }
            else
            {
                return redirect('/');
            }
        }
        
    public function student_documents(Request $request,$id)
    {
        $student = Student::where('id',$id)->first();
        //return $student;
        return view('admin.student_doc',['student'=>$student]);
    }

    public function getadmissions(Request $request)
    {
        $admissions = Admission::Orderby('id','desc')->get();
        return view('admin.admissionlist',['admissions'=>$admissions]);
    }

    public function getadmissions2(Request $request)
    {
        $admissions = Admission::Orderby('id','desc')->get();
        $franchisees = Franchisee::all();
        return view('admin.admissions',['franchisees'=>$franchisees,'admissions'=>$admissions,'start_date'=>null,'end_date'=>null]);
    }

    public function getAdmissionsRecords(Request $request)
       {
        $start_date = $request->get('start_date');
        $end_date = $request->get('end_date');
       // $end_date = Carbon::parse($end_date)->addDays(1);
        //return $end_date;    

        $admissions = Admission::where('admission_date','>=',$start_date)->where('admission_date','<=',$end_date)->get();
        $total = 0; $gst_total = 0; 
        foreach($admissions as $admission)
        {
            $gst_total = $gst_total +  $admission->remark2 ;

            $total = $total + $admission->fee;
        }
        $franchisees = Franchisee::all();
        $start_date = new Carbon($start_date);
        $end_date = new Carbon($end_date);
        //return view('admin.admissions',['franchisees'=>$franchisees,'admissions' => $admissions,'total'=>$total,'gst_total'=>$gst_total]);
        return view('admin.admissions',['franchisees'=>$franchisees,'admissions' => $admissions,'start_date'=>$start_date,'end_date'=>$end_date]);
       }

       public function getAdmissionsRecordsByFranchisee(Request $request)
       {
        $id = $request->get('franchisee');
        $franchisee = Franchisee ::where('id',$id)->first();
       // $end_date = Carbon::parse($end_date)->addDays(1);
        //return $end_date;    

        $admissions = Admission::where('franchisee_id',$franchisee->id)->get();
        $total = 0; $gst_total = 0; 
        foreach($admissions as $admission)
        {
            $gst_total = $gst_total +  $admission->remark2 ;

            $total = $total + $admission->fee;
        }
        $franchisees = Franchisee::all();
        //return view('admin.admissions',['franchisees'=>$franchisees,'admissions' => $admissions,'total'=>$total,'gst_total'=>$gst_total]);
        return view('admin.admissions',['franchisees'=>$franchisees,'admissions' => $admissions,'start_date'=>null,'end_date'=>null]);
       }

       public function delete_Admission(Request $request,$id)
       {
           $admission = Admission::find($id);
           $admission->delete();
           // /admin/admissions
          return redirect('/admin/admissions')->with('success','Admission Deleted Successfully !!');
       }


       public function delete_student(Request $request,$id)
       {
          $student = Student::where('id',$id)->first();
          $admission = Admission::where('studnt_id',$student->id)->first();
          if($admission == null)  
          {
            $email = $student->email;
            $student->delete();
            $user = User::where('email',$email)->first();
            $user->delete();
            return redirect('/studentlist')->with('success','Student Deleted Successfully !!');
          }
          else
          {
           return redirect('/studentlist')->with('danger','Student Can not be Deleted !!');
          }
       }
    }