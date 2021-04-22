<?php

namespace App\Http\Controllers\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
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

class StudentController extends Controller{

	public function index()
		{
		  return view('student.student');
		}
	
	public function enrolForAdmissionInsert(Request $request)
		{
			// $batchid = $request->get('batchid');
		   
			// $batch = Batch::where('id', $batchid)->first();
		  
			// $batch_owner = User::where('id',$batch->user_id)->first();
			// //return $batch_owner;
			// $franchisee = Franchisee::where('user_id',$batch_owner->id)->first();
			//return $franchisee;
			//if(Auth::user()->role=="customer")
			//{
				//$userid = Auth::user()->id;
                $check = User::where('email', $request->input('email'))->get()->first();
				if($check !== null)
				{
					return redirect('/')->with('danger','Email Already Exists. Please Enter Another Email or Login.');
				}

				$user = new User();
				$user->email = $request->input('email');
				$user->role = 'student';

				$student = new Student();
				$student->first_name = $request->get('first_name');
				$student->last_name = $request->get('last_name');
				$student->email = $request->input('email');
				//$student->fathers_name = $request->get('fathers_name');
				//$student->fathers_occupation = $request->get('fathers_occupation');
				//$student->fathers_income = $request->get('fathers_income');
				//$student->mothers_name = $request->get('mothers_name');
				//$student->mothers_occupation = $request->get('mothers_occupation');
				//$student->mothers_income = $request->get('mothers_income');
				$student->permanent_address = $request->get('permanent_address');
				//$student->pincode = $request->get('pincode');
				//$student->parent_contact = $request->get('parent_contact');
				$student->student_contact = $request->get('student_contact');
				//$student->nationality = $request->get('nationality');
				//$student->state = $request->get('state');
				$student->aadhar_no = $request->get('aadhar_no');
				//$student->gender = $request->get('gender');
				//$student->remark5 = $request->input('dob');

				//$student->tenth_school = $request->get('tenth_school');
				//$student->tenth_board = $request->get('tenth_board');
				//$student->tenth_passingyear = $request->get('tenth_passingyear');
				//$student->tenth_percentage = $request->get('tenth_percentage');
	
				//$student->twelth_school = $request->get('twelth_school');
				//$student->twelth_board = $request->get('twelth_board');
				// $student->twelth_passingyear = $request->get('twelth_passingyear');
				// $student->twelth_percentage = $request->get('twelth_percentage');
	
				// $student->graduate_school = $request->get('graduate_school');
				// $student->graduate_board = $request->get('graduate_board');
				// $student->graduate_passingyear = $request->get('graduate_passingyear');
				// $student->graduate_percentage = $request->get('graduate_percentage');

				if($request->file('aadhar_pdf'))
				{
					$file1 = $request->file('aadhar_pdf');		
					$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					$file1->move(base_path().'/public/images/storage/students/', $filename1);
					$student->aadhar_pdf = '/images/storage/students/'.$filename1;
				}
	
				// if($request->file('tenth_doc'))
				// {
				// 	$file1 = $request->file('tenth_doc');		
				// 	$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
				// 	$file1->move(base_path().'/public/images/storage/students/', $filename1);
				// 	$student->tenth_doc = '/images/storage/students/'.$filename1;
				// }
				// if($request->file('twelth_doc'))
				// {
				// 	$file1 = $request->file('twelth_doc');		
				// 	$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
				// 	$file1->move(base_path().'/public/images/storage/students/', $filename1);
				// 	$student->twelth_doc = '/images/storage/students/'.$filename1;
				// }
				// if($request->file('graduate_doc'))
				// {
				// 	$file1 = $request->file('graduate_doc');		
				// 	$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
				// 	$file1->move(base_path().'/public/images/storage/students/', $filename1);
				// 	$student->graduate_doc = '/images/storage/students/'.$filename1;
				// }
				if($request->file('passport_image'))
				{
					$file1 = $request->file('passport_image');		
					$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					$file1->move(base_path().'/public/images/storage/students/', $filename1);
					$student->passport_image = '/images/storage/students/'.$filename1;
				}    


				if($request->input('password') === $request->input('confirm_password'))
					 {
						$password = Hash::make($request->input('password'));			
						$user->password = $password;
						$user->save();

						$student->user_id = $user->id;
						$student->password = $password;
						

						$name = $request->input('first_name') . " ".$request->input('last_name');
						$email = $request->input('email');
        				$password = $request->input('password');

       					if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'student'))
      					{
							$data = array('name'=>$name);
							Mail::send('mail11', $data, function($message) use($email) {
							$message->to($email, 'Sw7')->subject
							('Welcome To Sw7');
							$message->from('sales@sw7infomedia.com', 'Sw7');
							});
							$student->save();
							return redirect('/')->with('success', '<script>alert("Student Details Successfully Inserted, User Logged In.")</script>');
						}

					}
					 else
					 {
					 	return redirect('/student_registration')->with('danger','Both Passwords Do Not Match.');
					 }

					
				
				// $admission = new Admission();
				// $admission->studnt_id = $student->id;
				// $admission->franchisee_id = $franchisee->id;
				// $admission->batch_id = $batch->id;
				// $admission->course_name = $batch->batch_name;
				// $admission->timetable = $batch->timetable;
				// $admission->timeslot = $batch->timeslot;
				// $admission->fee = $batch->course_final_fee;
				// $mytime = Carbon::now();
				// $admission->admission_date =$mytime->toDateTimeString();
				// $admission->save();
				return redirect('/');
			//}
			// else
			// {
			// 	return redirect('/')->with('error','Login with Customer Account for Student registration!!');
			// }
	}
	
		public function student_account()
		{
			if(Auth::check() && (Auth::user()->role == "student") )
			{
				return view('student.student_account');
			}	
			else
			{
				return redirect('/')->withErrors(['Error', 'Invalid user']);
			}
		}

		public function studentEditProfile()
    {
		if(Auth::check() && ( Auth::user()->role == 'student'))
        {
            $user = Auth::user();           
            $student = Student::where('user_id', $user->id) ->first();  
              
            if(!empty($student))
            return view('student.student_edit', ['student' => $student]);                
        
            else
            {
                return redirect('user/login');
            }
        }
    }
	
		public function studentUpdateProfile(Request $request)
		{
			if(Auth::check() && ( Auth::user()->role == 'student'))
			{
				$user = Auth::user();
				$student = Student::where('user_id', $user->id) ->first();  
							
					if(empty($student))
						return redirect('/')->with('danger', 'Customer not found');
			
					$student->first_name = $request->input('first_name');
					$student->last_name = $request->input('last_name');
					//$student->dob = $request->input('dob');
				    $student->email = $request->input('email');
                    $student->student_contact = $request->input('student_contact');
                    $student->permanent_address = $request->input('permanent_address');
                   // $student->city = $request->input('city');
					$student->pincode = $request->input('pincode');
					
					$image_path=$student->passport_image;
					//return $image_path;
					if($request->hasFile('passport_image'))
					{
						if($image_path!="NA")
						{
						//unlink(public_path() .$image_path );
						}
					$file1 = $request->file('passport_image');		
					$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					$file1->move(base_path().'/public/images/storage/students/', $filename1);
					$student->passport_image = '/images/storage/students/'.$filename1;
						
					}
					$student->passport_image = '/images/storage/students/'.$filename1;
					$str = str_replace("/images/storage/students/", "",$student->passport_image);
					//return $str;
					
					$user->role = 'student';
					$user->save();
					$student->save();
        
       			return redirect('/')->with('success', 'student has been successfully Updated');
			}
		}

		public function getcourseAdmission(Request $request,$id)
		{
			if(Auth::check() && ( Auth::user()->role == 'student'))
			{
				$batch = Batch::where('id', $id)->first();
		  
				$batch_owner = User::where('id',$batch->user_id)->first();
				//return $batch_owner;
				$user = Auth::user();
				$student = Student::where('user_id', $user->id) ->first(); 
				Session::put('batch_id',$id); 
				Session::put('userid',$user->id); 
				// Cookie::queue(Cookie::make('batch_id', $id, 60));
				// Cookie::queue(Cookie::make('userid', $user->id, 60));
				//return view('student.onlinePayment3',['batch'=>$batch,'student'=>$student]);
				return view('student.onlinePayment2',['batch'=>$batch,'student'=>$student]);
			}
			else
			{
				return redirect('/')->with('danger','Please login with Student account for course admission!!.');
			}
		}

// 		public function buyCourse(Request $request)
// 		{
// 		// 	$status=$request->get('status');
// 		// 	$firstname=$request->get('firstname');
// 		// 	$amount=$request->get('amount');
// 		// 	$txnid=$request->get('txnid');
// 		// 	$posted_hash=$request->get('hash');
// 		// 	$key=$request->get('key');
// 		// 	$productinfo=$request->get('productinfo');
// 		// 	$email=$request->get('email');
// 		// 	$salt="YAFfyRAHeB";
// 		// 	$key = "FsSzqFiq";       //MERCHANT_KEY
// 		// 	//$batchid= Session::get('batch_id');
	
// 		// 	$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
// 		// 	$hash = hash("sha512", $retHashSeq);
// 		//    if ($hash != $posted_hash) 
// 		//   {
// 		// 	   echo "Invalid Transaction. Please try again";
// 		//   } 
// 		//    else 
// 		//   {
// 		// 	//  echo "<h3>Thank You. Your order status is \n". $status.". </h3>";
// 		// 	//  echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
// 		// 	//  echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
// 		// 	//echo "<br>";
// 		//   } 
// 		//return "he";
// 		  $userid = Session::get('userid');
// 		  $batchid = Session::get('batch_id');
// 		//   $userid = Cookie::get('userid');
// 		//   $batchid = Cookie::get('batch_id');
// 		  //return $userid;
// 		  $student = Student::where('user_id', $userid) ->first();
// 	      $porder = Admission::where('batch_id',$batchid)->where('studnt_id',$student->id)->first();
// 		  if(empty($porder)){  
			
	
			
// 			$batch = Batch::where('id', $batchid)->first();

// 			$batch_owner = User::where('id',$batch->user_id)->first();
// 			//return $batch_owner;
// 			$franchisee = Franchisee::where('user_id',$batch_owner->id)->first();
// 			$franchisee_email=$franchisee->email;
// 			$student_email=$student->email;
// 			$admission = new Admission();
//             $admission->studnt_id = $student->id;
// 			$admission->franchisee_id = $franchisee->id;
// 		    $admission->batch_id = $batchid;
//             $admission->course_name = $batch->batch_name;
//             $admission->timetable = $batch->timetable;
//             $admission->timeslot = $batch->timeslot;
//             $admission->fee = $batch->course_final_fee;
//             $mytime = Carbon::now();
// 			$admission->admission_date =$mytime->toDateTimeString();

// 			if($student->graduate_school!= null)
// 			{
// 				$qualification = "Graduate";
// 			}
// 			else if($student->twelth_school!= null)
// 			{
// 				$qualification = "12th";
// 			}
// 			else if($student->tenth_school!= null)
// 			{
// 				$qualification = "10th";
// 			}
// 			$output = '<!DOCTYPE html>
// 			<html>
// 				<head>
				
// 				<body style="background-color:#f7f2f2;width:900px; margin:30px;" >
// 					<center>
//     <h1 style= color:black ><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></h1>
//     <span>GST Number : </span><br>
//     <span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
//     <span>Website : www.sw7infomedia.com</span><br>
//     <span>Email : support@sw7infomedia.com</span><br>
//     <span>Customer Care : +91 7030023002 </span><br>
//     </center>
    
//     </center><hr style="color: black;">
//     <h3><strong>Bill To,<br>  </h3></strong>'.$student->first_name.' '.$student->last_name.'</h3></strong>';

// 	$output .= '<h4>&nbsp;&nbsp;&nbsp;&nbsp;Thank You for Enrollment! Here are your Enrollment Details :</h4>
	
// 	<div class="table" align="center"  style="overflow-x:auto;">
//     <div class="col-md-12 col-sm-6">
//     <center><h2 style= color:black ><b><u> Enrollment Details </u></b></h2></center>
// 	<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">
//         <thead>
//             <tr height="40">
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Batch Name  </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Timetable </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Course Fee( In Rs. ) </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">GST (%) </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;"> Discount( In Rs. ) </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Total Fee( In Rs. )</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Admission Date </th>
//             </tr>
// <tbody>
// 	  <tr>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->batch_name.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$admission->timetable.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->fee.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->gst.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->discount.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->course_final_fee.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$admission->admission_date.'</td>

// 	  </tr>

// </tbody>

// </thead>

// </table><br><br>
// </div>
// </div>

// <div class="table" align="center"  style="overflow-x:auto;">
//     <div class="col-md-12 col-sm-6">
//     <center><h2 style= color:black ><b><u> Student Details </u></b></h2></center>
// 	<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">
//         <thead>
//             <tr height="40">
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Name</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Date Of Birth </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Gender </th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Aadhaar Number</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Qualification</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Email ID</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Mobile Number</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Alternative Mobile Number</th>
// 			<th  style="border: 1px solid;color:black; font-size:15px;">Permanent Address</th>
//             </tr>
// <tbody>
// 	  <tr>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->first_name.' '.$student->fathers_name.' '.$student->last_name.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->remark5.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->gender.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->aadhar_no.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$qualification.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->email.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->student_contact.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->parent_contact.'</td>
// 	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->permanent_address.'</td>
// 	</tr>

// </tbody>

// </thead>

// </table><br><br>
// </div>
// </div>


// <div class="row">
// 	<h3>Rules And Regulation :</h3>
//     <ul>
// <li> Prior to applying for courses at  SW7 INFOLINE PVT LTD applicant must acquaint himself/herself with the cardinal rules and regulations of the Institute. Applicant cannot cancel the transaction once an payment has been made. Under no circumstances will the payment for the Application Fees be refunded to the Applicant.</li>
// <li> Admission to any program is not-transferable to any other individual.</li>
// <li> Application must be submitted with required number of sets of Xerox attested copies of documents as specified in document check list of this form.</li>
// <li> All fees to be paid by students to the institute by the stipulated time.</li>
// <li> Late payment of fees would carry a fine and could lead to cancellation of admission.</li>
// <li> Any fee paid to the institute is <b>NON-REFUNDABLE</b>.</li>
// <li> In case of cancellation of admission by the candidate, no refund will be made.</li>
// <li> If a student admitted to the Institute is found to have given any false information or suppressed some material information, his/her candidature will be cancelled and no fees will be refunded.</li>
// <li> A student should observe all the rules and regulations as said. Breach of any of these may render him / her liable for penalty under the rules and disciplinary action will be taken by the Institute.</li>
// <li> Any student disturbing a class in session will be given an initial warning after which the faculty can ask the student to exit the classroom.</li>
// <li> Misbehavior, habitual late coming, disobedience, absenteeism, consumption of prohibited substances in the premises, malpractices, cheating in the assessments, and other such acts unbecoming of a professional actor shall attract suspension from the institute.</li>
// <li> The Institute reserves the right to change the course content of the programs, rules and regulations, teaching schedule, payable fees, hostel fees and/or any other matter pertaining to its working. The Management’s decision will be deemed as final in all such matters.</li>
// <li> Student should purchase their own practical material (Scrap). We provide scrap for group practical and its common not separate. Student should have responsibility and need to return after practice done. </li>
// <li> We are teaching checking process of electronic board we not committed student will train 100% after Course its depend on his grasping power and his concentration on study. </li>
// <li> IF Any Complaint Regarding Training Period Any Type Please fill complaint form and drop into complaint box.</li>
// </ul>
   
// </div>
// <br><br>Thank You,
//     <br>SW7 INFOMEDIA PRIVATE LIMITED,
//     <br>Rahatani Link Rd, <br>
// Dagadu Patil Nagar, <br>
// Thergaon,Pimpri-Chinchwad, <br>
// Maharashtra 411017,India
// </body>';

// //return $output;
// $admission->remark1 = $output;
// 			$admission->save();

// 			$data = array('admission'=>$admission,'student'=>$student,'franchisee'=>$franchisee,'batch'=>$batch,'qualification'=>$qualification);
    
            
//             Mail::send('mail12', $data, function($message) use($student_email,$student) {
//                 $message->to($student_email,$student->first_name)->subject
//                 ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
//                 $message->from('sales@sw7infomedia.com', 'SW7');

// 			});
// 			//return "hi";
// 			Mail::send('mail12', $data, function($message) use($franchisee_email,$franchisee) {
//                 $message->to($franchisee_email, $franchisee->first_name)->subject
//                 ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
//                 $message->from('sales@sw7infomedia.com', 'SW7');

// 			});
// 			Session::forget('batch_id');
// 			Session::forget('userid');
// 			return redirect('/')->with('success','Course Purchase Successfully !!.');		
// 		  }
// 		else
// 		{
// 			return redirect('/')->with('success','Already Enrolled for course !!.');
// 		}  
		
// 		}



public function buyCourseOffline(Request $request)
		{
		//$userid = Session::get('userid');
			$userid = Auth::user()->id;
			$batchid = Session::get('batch_id');
		
		  $student = Student::where('user_id', $userid) ->first();
		  $batch = Batch::where('id', $batchid)->first();

			$batch_owner = User::where('id',$batch->user_id)->first();
			//return $batch_owner;
			$franchisee = Franchisee::where('user_id',$batch_owner->id)->first();
			$franchisee_email=$franchisee->email;
			$student_email=$student->email;
			$admission = new Admission();
            $admission->studnt_id = $student->id;
			$admission->franchisee_id = $franchisee->id;
		    $admission->batch_id = $batchid;
            $admission->course_name = $batch->batch_name;
            $admission->timetable = $batch->timetable;
			$admission->timeslot = $batch->timeslot;
		
			$fee = $batch->fee;
			$gst = $batch->fee * ($batch->gst/100);
			$discount = $batch->discount;

            $admission->remark2 = $gst;
			$admission->remark3 = $fee;
			$admission->remark4 = $discount;
		
			$admission->fee = $batch->course_final_fee;
			
            $mytime = Carbon::now();
			$admission->admission_date =$mytime->toDateString();

			if($student->graduate_school!= null)
			{
				$qualification = "Graduate";
			}
			else if($student->twelth_school!= null)
			{
				$qualification = "12th";
			}
			else if($student->tenth_school!= null)
			{
				$qualification = "10th";
			}
			
			$output = '<!DOCTYPE html>
			<html>
				<head>
				
				<body >
			
				
				<img src="https://www.sw7infomedia.com/images/new/logo1.jpeg" style="width:100px;height:100px;"/>
	
				<div style=" display:inline-block;margin-left:100px;margin-top:10px;">
				<span style="color:black;font-size:24px;"><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></span><br>
				<span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
				<span>Website : www.sw7infomedia.com</span><br>
				<span>Email : support@sw7infomedia.com</span><br>
				<span>Customer Care : +91 7030023002 </span> <br>
				<span>Date : '.$mytime->format('d/m/Y').'  &nbsp;&nbsp;&nbsp;</span></div>
				<hr style="color: black;">
 
				<center><h2 style= color:black ><b><u> Student Details </u></b></h2></center>

			<div class="table" align="center"  style="overflow-x:auto;">
    			<div class="col-md-12 col-sm-6">';
	
	$output .= '<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">
      
            <tr>
			<th  style="border: 1px solid;color:black; font-size:15px;;height:40px;">Name</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->first_name.' '.$student->fathers_name.' '.$student->last_name.'</td>
			</tr>
			
			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;;height:40px;">Date Of Birth </th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->remark5.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;;height:40px;">Gender </th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->gender.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Aadhaar Number</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->aadhar_no.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Qualification</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$qualification.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Email ID</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->email.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Mobile Number</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->student_contact.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Alternative Mobile Number</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->parent_contact.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Permanent Address</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->permanent_address.'</td>
            </tr>

	 </table>
</div>
</div>

<div class="table" align="center"  style="overflow-x:auto;">
    <div class="col-md-12 col-sm-6">
	<center><h2 style= color:black ><b><u> Enrollment Details </u></b></h2></center>';

	$output .= '<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">
        <thead>
            <tr >
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Batch Name  </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Timetable </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Course Fee(Rs.) </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">GST (%) </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;"> Discount(Rs.) </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Total Fee(Rs.)</th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Admission Date </th>
            </tr>
<tbody>
	  <tr>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->batch_name.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$admission->timetable.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->fee.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->gst.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->discount.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->course_final_fee.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$mytime->format('d/m/Y').'</td>

	  </tr>

</tbody>

</thead>

</table>
</div>
</div>
<br><br><br><br>
<div class="col-md-12">
<div class="row">
<h3>Course Details :</h3>
<pre>'.$batch->description.'</pre>
</div>
</div>

<div class="row">
	<h3>Rules And Regulation :</h3>
    <ul>
<li> Prior to applying for courses at  SW7 INFOMEDIA PVT LTD applicant must acquaint himself/herself with the cardinal rules and regulations of the Institute. Applicant cannot cancel the transaction once an payment has been made. Under no circumstances will the payment for the Application Fees be refunded to the Applicant.</li>
<li> Admission to any program is not-transferable to any other individual.</li>
<li> Application must be submitted with required number of sets of Xerox attested copies of documents as specified in document check list of this form.</li>
<li> All fees to be paid by students to the institute by the stipulated time.</li>
<li> Late payment of fees would carry a fine and could lead to cancellation of admission.</li>
<li> Any fee paid to the institute is <b>NON-REFUNDABLE</b>.</li>
<li> In case of cancellation of admission by the candidate, no refund will be made.</li>
<li> If a student admitted to the Institute is found to have given any false information or suppressed some material information, his/her candidature will be cancelled and no fees will be refunded.</li>
<li> A student should observe all the rules and regulations as said. Breach of any of these may render him / her liable for penalty under the rules and disciplinary action will be taken by the Institute.</li>
<li> Any student disturbing a class in session will be given an initial warning after which the faculty can ask the student to exit the classroom.</li>
<li> Misbehavior, habitual late coming, disobedience, absenteeism, consumption of prohibited substances in the premises, malpractices, cheating in the assessments, and other such acts unbecoming of a professional actor shall attract suspension from the institute.</li>
<li> The Institute reserves the right to change the course content of the programs, rules and regulations, teaching schedule, payable fees, hostel fees and/or any other matter pertaining to its working. The Management’s decision will be deemed as final in all such matters.</li>
<li> Student should purchase their own practical material (Scrap). We provide scrap for group practical and its common not separate. Student should have responsibility and need to return after practice done. </li>
<li> We are teaching checking process of electronic board we not committed student will train 100% after Course its depend on his grasping power and his concentration on study. </li>
<li> IF Any Complaint Regarding Training Period Any Type Please fill complaint form and drop into complaint box.</li>
</ul>
   
</div>
<br><br>

<div class="row">
	<h3>General Rules :</h3>
    <ul>
<li> Students are requested not to litter classrooms and working areas of Institute.</li>
<li> Audio -visual equipment used in class should not be handled by student.</li>
<li> All the lights and fans must be switched off by the students who is the last to leave th e class.All students are enjoined to Conserve water and electricity in the larger interest of the society.</li>

</ul>
   
</div>
<br><br>
';
$str = str_replace("/images/storage/students/", "",$student->passport_image);
	
	$image = "https://www.sw7infomedia.com/images/storage/students/".$str;

	$html ='<img src="'.$image.'" style="width:138px;height:190px;border:solid black;"/><br>';

	$output .= '<center> Student Profile Image :<br><br>'.$html.'<br>
	
<h4>Online Verified By '.$student->first_name .' '.$student->last_name.'</h4></center><br>';
	$output .= ' <br><br>Thank You,
    <br>SW7 INFOMEDIA PRIVATE LIMITED,
    <br>Rahatani Link Rd, <br>
Dagadu Patil Nagar, <br>
Thergaon,Pimpri-Chinchwad, <br>
Maharashtra 411017,India
</body>';

//return $output;
$admission->remark1 = $output;
			$admission->save();
			//return $admission;
			$data = array('admission'=>$admission,'student'=>$student,'franchisee'=>$franchisee,'batch'=>$batch,'qualification'=>$qualification);
    
            	//franchisee mail;
            Mail::send('mail12', $data, function($message) use($student_email,$student) {
                $message->to($student_email,$student->first_name)->subject
                ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
                $message->from('sales@sw7infomedia.com', 'SW7');

			});
			//franchisee mail;
			Mail::send('mail12', $data, function($message) use($franchisee_email,$franchisee) {
                $message->to($franchisee_email, $franchisee->first_name)->subject
                ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
                $message->from('sales@sw7infomedia.com', 'SW7');

			});
			//admin mail;
			// Mail::send('mail12', $data, function($message) use($franchisee_email,$franchisee) {
            //     $message->to('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED')->subject
            //     ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
            //     $message->from('sales@sw7infomedia.com', 'SW7');

			// });	
			Session::forget('batch_id');
			Session::forget('userid');
			return redirect('/')->with('success','Course Purchase Successfully !!.');		
		 // }
		// else
		// {
		// 	return redirect('/')->with('success','Already Enrolled for course !!.');
		// }  
		
		}

		public function buyCourse(Request $request)
		{
		//$userid = Session::get('userid');
			$userid = Auth::user()->id;
			$batchid = Session::get('batch_id');
		
		  $student = Student::where('user_id', $userid) ->first();
		  $porder = Admission::where('batch_id',$batchid)->where('studnt_id',$student->id)->first();
		  
		    //razorpay
			$input = Input::all();
			//get API Configuration 
			$api = new Api(config('custom.razor_key'), config('custom.razor_secret'));
			//Fetch payment information by razorpay_payment_id
			$payment = $api->payment->fetch($input['razorpay_payment_id']);

		//   if(empty($porder)){  
			 if(count($input)  && !empty($input['razorpay_payment_id'])) 
			{
				try {
					$response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

				} catch (\Exception $e) {
					return  $e->getMessage();
					\Session::put('error',$e->getMessage());
					return redirect()->back();
				}

				$batch = Batch::where('id', $batchid)->first();

			$batch_owner = User::where('id',$batch->user_id)->first();
			//return $batch_owner;
			$franchisee = Franchisee::where('user_id',$batch_owner->id)->first();
			$franchisee_email=$franchisee->email;
			$student_email=$student->email;
			$admission = new Admission();
            $admission->studnt_id = $student->id;
			$admission->franchisee_id = $franchisee->id;
		    $admission->batch_id = $batchid;
            $admission->course_name = $batch->batch_name;
            $admission->timetable = $batch->timetable;
			$admission->timeslot = $batch->timeslot;

			$fee = $batch->fee;
			$gst = $batch->fee * ($batch->gst/100);
			$discount = $batch->discount;

            $admission->remark2 = $gst;
			$admission->remark3 = $fee;
			$admission->remark4 = $discount;	

			$admission->fee = $batch->course_final_fee;
			$admission->payment_id = $input['razorpay_payment_id'];
			$admission->payment_method = "Online Payment";
            $mytime = Carbon::now();
			$admission->admission_date =$mytime->toDateString();

			if($student->graduate_school!= null)
			{
				$qualification = "Graduate";
			}
			else if($student->twelth_school!= null)
			{
				$qualification = "12th";
			}
			else if($student->tenth_school!= null)
			{
				$qualification = "10th";
			}
			$output = '<!DOCTYPE html>
			<html>
				<head>
				
				<body >
			
				
				<img src="https://www.sw7infomedia.com/images/new/logo1.jpeg" style="width:100px;height:100px;"/>
	
				<div style=" display:inline-block;margin-left:100px;margin-top:10px;">
				<span style="color:black;font-size:24px;"><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></span><br>
				<span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
				<span>Website : www.sw7infomedia.com</span><br>
				<span>Email : support@sw7infomedia.com</span><br>
				<span>Customer Care : +91 7030023002 </span> <br>
				<span>Date : '.$mytime->format('d/m/Y').'  &nbsp;&nbsp;&nbsp;</span></div>
				<hr style="color: black;">
 
				<center><h2 style= color:black ><b><u> Student Details </u></b></h2></center>

			<div class="table" align="center"  style="overflow-x:auto;">
    			<div class="col-md-12 col-sm-6">';
	
	$output .= '<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">
      
            <tr>
			<th  style="border: 1px solid;color:black; font-size:15px;;height:40px;">Name</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->first_name.' '.$student->fathers_name.' '.$student->last_name.'</td>
			</tr>
			
			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;;height:40px;">Date Of Birth </th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->remark5.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;;height:40px;">Gender </th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->gender.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Aadhaar Number</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->aadhar_no.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Qualification</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$qualification.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Email ID</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->email.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Mobile Number</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->student_contact.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Alternative Mobile Number</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->parent_contact.'</td>
			</tr>

			<tr>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Permanent Address</th>
			<td style="border: 1px solid; padding:0px;font-size:15px;">'.$student->permanent_address.'</td>
            </tr>

	 </table>
</div>
</div>

<div class="table" align="center"  style="overflow-x:auto;">
    <div class="col-md-12 col-sm-6">
	<center><h2 style= color:black ><b><u> Enrollment Details </u></b></h2></center>';

	$output .= '<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">
        <thead>
            <tr >
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Batch Name  </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Timetable </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Course Fee(Rs.) </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">GST (%) </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;"> Discount(Rs.) </th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Total Fee(Rs.)</th>
			<th  style="border: 1px solid;color:black; font-size:15px;height:40px;">Admission Date </th>
            </tr>
<tbody>
	  <tr>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->batch_name.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$admission->timetable.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->fee.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->gst.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->discount.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$batch->course_final_fee.'</td>
	  <td style="border: 1px solid; padding:0px;font-size:15px;">'.$mytime->format('d/m/Y').'</td>

	  </tr>

</tbody>

</thead>

</table>
</div>
</div>
<br><br><br><br>
<div class="col-md-12">
<div class="row">
<h3>Course Details :</h3>
<pre>'.$batch->description.'</pre>
</div>
</div>

<div class="row">
	<h3>Rules And Regulation :</h3>
    <ul>
<li> Prior to applying for courses at  SW7 INFOMEDIA PVT LTD applicant must acquaint himself/herself with the cardinal rules and regulations of the Institute. Applicant cannot cancel the transaction once an payment has been made. Under no circumstances will the payment for the Application Fees be refunded to the Applicant.</li>
<li> Admission to any program is not-transferable to any other individual.</li>
<li> Application must be submitted with required number of sets of Xerox attested copies of documents as specified in document check list of this form.</li>
<li> All fees to be paid by students to the institute by the stipulated time.</li>
<li> Late payment of fees would carry a fine and could lead to cancellation of admission.</li>
<li> Any fee paid to the institute is <b>NON-REFUNDABLE</b>.</li>
<li> In case of cancellation of admission by the candidate, no refund will be made.</li>
<li> If a student admitted to the Institute is found to have given any false information or suppressed some material information, his/her candidature will be cancelled and no fees will be refunded.</li>
<li> A student should observe all the rules and regulations as said. Breach of any of these may render him / her liable for penalty under the rules and disciplinary action will be taken by the Institute.</li>
<li> Any student disturbing a class in session will be given an initial warning after which the faculty can ask the student to exit the classroom.</li>
<li> Misbehavior, habitual late coming, disobedience, absenteeism, consumption of prohibited substances in the premises, malpractices, cheating in the assessments, and other such acts unbecoming of a professional actor shall attract suspension from the institute.</li>
<li> The Institute reserves the right to change the course content of the programs, rules and regulations, teaching schedule, payable fees, hostel fees and/or any other matter pertaining to its working. The Management’s decision will be deemed as final in all such matters.</li>
<li> Student should purchase their own practical material (Scrap). We provide scrap for group practical and its common not separate. Student should have responsibility and need to return after practice done. </li>
<li> We are teaching checking process of electronic board we not committed student will train 100% after Course its depend on his grasping power and his concentration on study. </li>
<li> IF Any Complaint Regarding Training Period Any Type Please fill complaint form and drop into complaint box.</li>
</ul>
   
</div>
<br><br>

<div class="row">
	<h3>General Rules :</h3>
    <ul>
<li> Students are requested not to litter classrooms and working areas of Institute.</li>
<li> Audio -visual equipment used in class should not be handled by student.</li>
<li> All the lights and fans must be switched off by the students who is the last to leave th e class.All students are enjoined to Conserve water and electricity in the larger interest of the society.</li>

</ul>
   
</div>
<br><br>
';
$str = str_replace("/images/storage/students/", "",$student->passport_image);
	
	$image = "https://www.sw7infomedia.com/images/storage/students/".$str;

	$html ='<img src="'.$image.'" style="width:138px;height:190px;border:solid black;"/><br>';

	$output .= '<center> Student Profile Image :<br><br>'.$html.'<br>
	
<h4>Online Verified By '.$student->first_name .' '.$student->last_name.'</h4></center><br>';
	$output .= ' <br><br>Thank You,
    <br>SW7 INFOMEDIA PRIVATE LIMITED,
    <br>Rahatani Link Rd, <br>
Dagadu Patil Nagar, <br>
Thergaon,Pimpri-Chinchwad, <br>
Maharashtra 411017,India
</body>';

//return $output;
			$admission->remark1 = $output;
			$admission->save();

			$data = array('admission'=>$admission,'student'=>$student,'franchisee'=>$franchisee,'batch'=>$batch,'qualification'=>$qualification);
    
            	//franchisee mail;
            Mail::send('mail12', $data, function($message) use($student_email,$student) {
                $message->to($student_email,$student->first_name)->subject
                ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
                $message->from('sales@sw7infomedia.com', 'SW7');

			});
			//franchisee mail;
			Mail::send('mail12', $data, function($message) use($franchisee_email,$franchisee) {
                $message->to($franchisee_email, $franchisee->first_name)->subject
                ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
                $message->from('sales@sw7infomedia.com', 'SW7');

			});
			//admin mail;
			// Mail::send('mail12', $data, function($message) use($franchisee_email,$franchisee) {
            //     $message->to('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED')->subject
            //     ('SW7 INFOMEDIA PRIVATE LIMITED Course Purchased');
            //     $message->from('sales@sw7infomedia.com', 'SW7');

			// });	
			}		
			
			Session::forget('batch_id');
			Session::forget('userid');
			return redirect('/')->with('success','Course Purchase Successfully !!.');		
		 // }
		// else
		// {
		// 	return redirect('/')->with('success','Already Enrolled for course !!.');
		// }  
		
		}

		public function myCourses()
		{
			$user = Auth::user();           
			$student = Student::where('user_id', $user->id) ->first();  
			
			$admissions = Admission::where('studnt_id',$student->id)->get();
			//return $admissions;
			return view('student.admissions',['admissions'=>$admissions]);
		}

		function download_bill(Request $request,$id)
		{
		$admission = Admission::find($id); 
		$user =  Auth::user();
		$student = Student::where('user_id',$user->id)->first();	
		//if(Auth::check() && $admission->studnt_id == $student->id)
		//{
		 $pdf = \App::make('dompdf.wrapper');
		
		 $pdf->loadHTML($admission->remark1)->setPaper('a4', 'legal');
		// $pdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
		 return $pdf->stream("Bill - ".$admission->id.".pdf");
		//}
		// else
		// {
		//  return redirect('/')->with('danger', 'Access Prohibited.');
		// }
		}
}


