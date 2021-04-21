<?php

namespace App\Http\Controllers;
use App\Models\enquiry;


use Illuminate\Http\Request;
use DB;
class enquiryController extends Controller
{
    //
    public function store(Request $request)
    {
        $username = $request -> input('username');
        $email = $request -> input('email');
        $contact = $request -> input('contact');
        $course = $request -> input('course');
        $enq_type = $request -> input('enq_type');

            $data = DB::insert('insert into enquiry (id,username,email,contact,course,enquiry_type) values (?,?,?,?,?,?)',[null,$username,$email,$contact,$course,$enq_type]);
            //return redirect('/');
            $lastid = DB::getPdo() -> lastInsertId();
            $data1 = DB::select('select * from enquiry where id='.$lastid);
             //echo $data1;
            foreach($data1 as $row){
                $row -> course;
        if($enq_type=='Student' || $enq_type=='Customer')
        {
            if($row -> course=='LCD Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/LCD Repairing Course');
            }
            elseif($row -> course=='Hdd Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/HDD Repairing Course');
            }
            elseif($row -> course=='CCTV Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/CCTV Repairing Course');
            }
            elseif($row -> course=='Laptop Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/Laptop Repairing Course');
            }
            elseif($row -> course=='Printer Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/Printer Repairing Course');
            }
            elseif($row -> course=='Mobile Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/Mobile Repairing Course');
            }
            elseif($row -> course=='AC Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/AC Repairing Course');
            }
            elseif($row -> course=='Fan Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/Fan Repairing Course');
            }
            elseif($row -> course=='Freeze Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/Freeze Repairing Course');
            }
            elseif($row -> course=='Combo Course 1')
            {
               // echo $data1;
                return redirect('/course_select/Combo Course 1');
            }
            elseif($row -> course=='Combo Course 2')
            {
               // echo $data1;
                return redirect('/course_select/Combo Course 2');
            }
            elseif($row -> course=='Combo Course 3')
            {
               // echo $data1;
                return redirect('/course_select/Combo Course 3');
            }

            elseif($row -> course=='Grinder Repairing Course')
            {
               // echo $data1;
                return redirect('/course_select/Grinder Repairing Course');
            }
            elseif($row -> course=='Cooler Repairing Course')
            {
                return redirect('/course_select/Cooler Repairing Course');
            }
            elseif($row -> course=='Xerox Machine Repairing Course')
            {
                return redirect('/course_select/Xerox Machine Repairing Course');
            }
            elseif($row -> course=='Owen Repairing Course')
            {
                return redirect('/course_select/Owen Repairing Course');
            }
            elseif($row -> course=='Elevator Repairing Course')
            {
                return redirect('/course_select/Elevator Repairing Course');
            }

            elseif($row -> course=='Motor Winding Repairing Course')
            {
                return redirect('/course_select/Motor Winding Repairing Course');
            }
            elseif($row -> course=='Washing Machine Repairing Course')
            {
                return redirect('/course_select/Washing Machine Repairing Course');
            }
            elseif($row -> course=='Basic Electronic Course')
            {
                return redirect('/course_select/Basic Electronic Course');
            }
            elseif($row -> course=='Computer Hardware Course')
            {
                return redirect('/course_select/Computer Hardware Course');
            }

            else{
                echo "Something went wrong";
            }
        }
        elseif($enq_type=='Franchisee')
        {
            return redirect('/');
        }
        else{
            return redirect('/');
        }
            }
    } 



}
