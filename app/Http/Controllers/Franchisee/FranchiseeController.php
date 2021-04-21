<?php

namespace App\Http\Controllers\Franchisee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Franchisee;
use App\Admission;
use App\Account;
use App\Student;
use App\Document;
use App\User;
use Auth;
use Hash;
use Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class FranchiseeController extends Controller
{

		public function index()
		{
				return view('franchisee.franchisee');
		}

		public function franchisee_account(Request $request)
		{
			$franchisee = Franchisee::where('email',Auth::user()->email)->first();
			if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
			{
				return view('franchisee.franchisee_account');
			}
			else if($franchisee->verify!=1)
			{
				$name = $franchisee->first_name . " ". $franchisee->last_name;
				$phone= $franchisee->contact1;
				$email= $franchisee->email;
				$link ="https://www.sw7infomedia.com/verify/".$email;
				//$link ="http://localhost/sw7/public/verify/".$email;
				$data = array('name'=>$name,'phone'=>$phone,'email'=>$email,'link'=>$link);
				$request->session()->flash('success', 'Please check your email Inbox and Verify Email!');
					Mail::send('mail3', $data, function($message) use ($email) {
						$message->to($email, 'sw7')->subject
						   ('Email Verification for sw7');
						   $message->from('sales@sw7infomedia.com', 'sw7');
				 
					   });
					   Auth::logout();	   
					   return redirect('/');
			}	
			else
			{
				Auth::logout();
				return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet!']);
			}
			
		}

		public function insert(Request $request)
			{
				$check = User::where('email', $request->input('email'))->get()->first();
				if($check !== null)
				{
					return redirect('/franchisee')->with('danger','Email Already Exists. Please Enter Another Email or Login.');
				}

					$franchisee = new Franchisee();

					// if($request->file('image')){
					// 	$file1 = $request->file('image');		
					// 	$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					// 	$file1->move(base_path().'/public/images/storage/franchisees/', $filename1);
					// 	$franchisee->profile_image = '/images/storage/franchisees/'.$filename1;
					// }
					// if($request->file('pdfimage')){
					// 	$file1 = $request->file('pdfimage');		
					// 	$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					// 	$file1->move(base_path().'/public/images/storage/franchisees/', $filename1);
					// 	$franchisee->profile_pdf = '/images/storage/franchisees/'.$filename1;
					// }
					$franchisee->first_name = $request->input('first_name');
					$franchisee->last_name = $request->input('last_name');
					$email = $request->input('email');
					$franchisee->email = $request->input('email');
                    $franchisee->contact1 = $request->input('contact_no1');
                   // $franchisee->contact2 = $request->input('contact_no2');
					$franchisee->password = $request->input('password');
									
					//$franchisee->dob = $request->input('dob');
					$franchisee->address = $request->input('address');
					//$franchisee->landmark = $request->input('landmark');
					$franchisee->city = $request->input('city');
					//$franchisee->pincode = $request->input('pincode');
					//$franchisee->landline_no = $request->input('landline_no');

					// $franchisee->contact_person = $request->input('contact_person');
					// $franchisee->contact_person_contact = $request->input('contact_person_contact');
					// $franchisee->office_time = $request->input('office_time');
					// $franchisee->description = $request->input('description');

					// $franchisee->qualification = $request->input('qualification');
					// if($request->file('qualification_pdf')){
					// 	$file1 = $request->file('qualification_pdf');		
					// 	$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					// 	$file1->move(base_path().'/public/images/storage/franchisees/', $filename1);
					// 	$franchisee->qualification_pdf = '/images/storage/franchisees/'.$filename1;
					// }

					$franchisee->verify = 0;

					$user = new User();
				    $user->email = $request->input('email');
					$user->role = 'franchisee';
					$user->status="Pending";
			

					if($request->input('password') === $request->input('confirm_password'))
					 {
						$password = Hash::make($request->input('password'));
						$user->password = $password;
						$user->save();

						$franchisee->password = $password;
						$franchisee->user_id = $user->id;
						$franchisee->save();
						//return $franchisee;

						$email = $request->input('email');
						$password = $request->input('password');
						$name = $request->input('first_name') . " ".$request->input('last_name');
						
						$data = array('franchisee'=>$franchisee);
							Mail::send('mail10', $data, function($message) use($franchisee) {
							$message->to($franchisee->email, $franchisee->first_name. " ".$franchisee->last_name)->subject
							('Franchisee Application Submitted');
							$message->from('sales@sw7infomedia.com', 'sw7');

							});

							Mail::send('mail10-a', $data, function($message) use($franchisee) {
								$message->to('sales@sw7infomedia.com', 'sw7')->subject
								('Franchisee Application Submitted');
								$message->from('sales@sw7infomedia.com', 'sw7');
	
								});

       					if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == "franchisee"))
      					{
					
						return redirect('/document')->with('success', 'Your application is submitted!!.');
						}

					 }
					 else
					 {
						return redirect('/franchisee')->with('danger','Both Passwords Do Not Match.');
					 }

			}

		public function edit()
	    {
			if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
			{
				$userid = Auth::user()->id;
				$franchisee = Franchisee::where('user_id',$userid)->first();
				$account = Account::where('user_id',$userid)->first();
				if(!empty($franchisee))
				{ 	
					return view('franchisee.franchisee_edit', ['franchisee' => $franchisee,'account' => $account]);
				}
				else
				{
					return redirect('/')->with('danger', 'Franchisee Not Found.');
				}
			}
		else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }

		}
		
		public function update(Request $request)
		{
			if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
			{
				$user = Auth::user();
				$franchisee = Franchisee::where('user_id', $user->id)->first();
				//return $franchisee;			
					if(empty($franchisee))
						return redirect('/')->with('danger', 'Franchisee not found');
					//return $franchisee;
					$franchisee->first_name = $request->input('first_name');
					$franchisee->last_name = $request->input('last_name');
					$franchisee->email = $request->input('email');
                    $franchisee->contact1 = $request->input('contact_no1');
                    $franchisee->contact2 = $request->input('contact_no2');

									
					$franchisee->dob = $request->input('dob');
					$franchisee->address = $request->input('address');
					$franchisee->landmark = $request->input('landmark');
					$franchisee->city = $request->input('city');
					$franchisee->pincode = $request->input('pincode');
					$franchisee->landline_no = $request->input('landline_no');

					$franchisee->contact_person = $request->input('contact_person');
					$franchisee->contact_person_contact = $request->input('contact_person_contact');
					$franchisee->office_time = $request->input('office_time');
					$franchisee->description = $request->input('description');

					
					$image_path=$franchisee->profile_image;
					if($request->hasFile('image'))
					{
						if($image_path!="")
						{
					//	unlink(public_path() . "".$image_path );
						}
					$file1 = $request->file('image');		
					$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					$file1->move(base_path().'/public/images/storage/franchisees/', $filename1);
					$franchisee->profile_image = '/images/storage/franchisees/'.$filename1;
						
					}

					
					
					$user->role = 'franchisee';
					$user->save();
					$franchisee->save();
            // if($request->input('password')!=='' && $request->input('password') === $request->input('confirm_password'))
            // {
            //     $password = Hash::make($request->input('password'));			
            //     $user->password = $password;
            //     $user->save();

            //     $franchisee->user_id = $user->id;
            //     $franchisee->password = $password;
            //     $franchisee->save();

            //     $email = $request->input('email');
            //     $password = $request->input('password');

            //     if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == "franchisee"))
            //     {
            //         return redirect('/')->with('success', 'Customer Details Successfully Updated, User Logged In.');
            //     }
            // }
            // elseif($request->input('password')==='' && $request->input('password') === $request->input('confirm_password'))
            // {
            //     $user->save();
            //     $franchisee->save();
            //     return redirect('/')->with('success', 'Franchise Details Successfully Updated.');
            // }
						
					return redirect('/')->with('success', 'Franchise has been successfully Updated');
			}
		else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
		}

		public function processToVerify(Request $request) {
			$email= $request->input('email');
			//return $email;
			$franchisee = Franchisee::where('email',$email)->first();
			 if($franchisee->verify==1)
			{
			//return $email;
			$request->session()->flash('success', 'You are already verified !!');
			 return redirect()->route('user.signin');
			}
			$franchisee->verify=1;
		   // $user->checkLogin=1;
			$franchisee->save();
		   // Auth::login($user);
		  
			$name = $franchisee->first_name . " ". $franchisee->last_name;
			$phone= $franchisee->contact1;
			$email= $franchisee->email;
			$data = array('name'=>$name,'phone'=>$phone,'email'=>$email);
			//    Mail::send('mail6', $data, function($message)  {
			// 	 $message->to('majhitest@gmail.com', 'MajhiTest.com')->subject
			// 	 ('New User Notifications');
			// 	 $message->from('majhitest@gmail.com', 'MajhiTest.com');
	 
			// });
	 
		  
		 Mail::send('mail6', $data, function($message) use ($email) {
			$message->to($email, 'SW7 INFOMEDIA PRIVATE LIMITED')->subject
			   ('Verification Successful');
			   $message->from('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED');
	 
		   });
			 // $request->session()->flash('success', 'You have been Sign in Successfully!');
			 // return redirect()->route('user.profile');
			 $request->session()->flash('success', 'You are verified successfully!please, wait for next 2 business days for approval.');
			 return redirect()->route('user.signin');
		 }

		 public function franchisee_packages()
		 {
			return view('franchisee.franchisee_packages');
		 }
		 
		 public function franchisee_payment(Request $request)
		 {
			$user = Auth::user();
			$franchisee = Franchisee::where('user_id', $user->id)->first();
			$scheme =$request->get('scheme');
			if($scheme =="scheme1")
			{
				$fee = 60000;
				$gst =  60000 * (18/100);
				$total = $fee + $gst;
			}
			else if($scheme =="scheme2")
			{
				$total = 200000;
			}
			else if($scheme =="scheme3")
			{
				$total = 500000;
			}
			//$total = 1;
			//return $scheme;
			Session::put('scheme',$scheme); 
			Session::put('total',$total); 
			Session::put('userid',$user->id); 
			return view('franchisee.check2',['franchisee'=>$franchisee,'scheme'=>$scheme,'total'=>$total]);
		 }

		 public function franchisee_transactionSuccess(Request $request) {
			
		    	$userid = Session::get('userid');
				$amount = Session::get('total');
				$scheme = Session::get('scheme');
							
			    $user = User::where('id',$userid)->first();
				$franchisee = Franchisee::where('user_id', $userid)->first();
				$account = Account::where('user_id',$userid)->first();
				$document = Document::where('user_id',$userid)->first();


				// $flag=0;
				// if($amount ==70800)
				// 	{
				// 		//return "hi";  
				// 		$fee = 60000.00; 
				// 		  $gst =  "18%";
				// 		  $flag=1;
				// 	} 
				// else
				// {
				// 	$fee = $amount; 
				// 	$gst =  "0%";
				// }
			
				// $franchisee->remark1 = $amount;
				
				// $franchisee->scheme = $scheme;
				$date = Carbon::now()->timezone('Asia/Kolkata');
				$date = $date->toDateString();
				//return $date;
				$output = '<!DOCTYPE html>
				<html>
					<head>
					
					<body>
						<center>
		<h1><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></h1>
		<span>GST Number : </span><br>
		<span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
		<span>Website : www.sw7infomedia.com</span><br>
		<span>Email : support@sw7infomedia.com</span><br>
		<span>Customer Care : +91 7030023002 </span><br>
		</center>
		
		</center><hr style="color: black;">
		<h3><strong>Bill To,<br>  </h3></strong>'.$franchisee->first_name.' '.$franchisee->last_name.'</h3></strong>';
	
		$output .= '<br><br><span>Agreement Number : '.$franchisee->id.'</span><br>&nbsp;&nbsp;&nbsp;&nbsp;<h4>Thank You for Registration! Here are your Registration Details :</h4>
		
		
	
	<div class="table" align="center"  style="overflow-x:auto;">
		<div class="col-md-12 col-sm-6">
		<center><h2><b><u> Franchisee  Details </u></b></h2></center>
		<table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:700px; font-size:24;"  border=" ">

				<tr height="40">
				<td  style="border: 1px solid;color:black; font-size:15px;">Name</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->first_name.' '.$franchisee->last_name.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Date Of Birth </td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->dob.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Aadhaar Number</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$document->aadhar_no.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">PAN Number</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$document->pan_no.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">GST Number</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$document->gst_number.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Shop Act Number</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$document->shopack_number.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Qualification</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->qualification.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Email ID</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->email.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Mobile Number</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->contact1.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Alternative Mobile Number</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->contact2.'</td>
				</tr>
				<tr>
				<td  style="border: 1px solid;color:black; font-size:15px;">Permanent Address</td>
				<td style="border: 1px solid; padding:0px;font-size:15px;">'.$franchisee->address.'</td>
				</tr>
	
		</table><br><br>
	</div>
	</div>
	
	
	<div class="d">
<p>This Agreement is made and entered into by Client and between SW7 INFOMEDIA PRIVATE LIMITED <br>
(After 3 year Clint need to Renew their Agreement before Due Date – fees will be charged)</p><br>
WHEREAS, SW7 INFOMEDIA PRIVATE LIMITED has experience in the development and operation of franchising systems, including franchising agreements, offering circulars, registration materials, forms, training programs, marketing brochures, franchisee support programs, sales programs, and related services; and </p>
WHEREAS, Client desires to develop a franchising program and to market that program on a regional and national basis;<br>
THEREFORE, in consideration of the foregoing and the promises contained herein, the parties hereto agree as follows:<br><br>
<h4> 1. Document Preparation</h4>
A. Franchise Agreement and Uniform Franchise Offering Circular SW7 INFOMEDIA PRIVATE LIMITED will ask you to supply the answers to our detailed Franchisor Questionnaire and return these to us together with any additional written materials that describe your services and/or products. Based upon the information received from you SW7 INFOMEDIA PRIVATE LIMITED will develop a draft of the required franchise documents setting forth the contractual relationship between the Client and potential franchisees and the required disclosures. Pursuant to discussions between SW7 INFOMEDIA PRIVATE LIMITED and Client, a final copy of these documents shall be prepared by SW7 INFOMEDIA PRIVATE LIMITED and forwarded to Client for your use. 

<br><br>
<h4>2. Franchisee Registration</h4>
“Client” shall pay an amount Franchisee fees (CLIENT SHOULD PAY AT THE DATE OF AGREEMENT). This amount is NON REFUNDABLE. This amount is charged against the material provided by SW7 INFOMEDIA PRIVATE LIMITED  (machines, Training and the consulting charges)
<br>
 Client shall pay sharing revenue of the admission fees collected from the candidates on monthly basis. <br>
 (IN CASE CHEQUE BOUNCE, WE WILL CANCELE THE FRANCHISE AGREEMNET WITHOUT INTIMATION) 
THIS PAYMENT IS NON-REFUNDABLAE <br><br>
<h4>3. Advertising  </h4>
SW7 INFOMEDIA PRIVATE LIMITED will supply Client with samples of suggested advertising materials designed to attract prospects and leads for the sale of franchises. With respect to the provision of each of the above consultation services it is specifically understood by Client that SW7 INFOMEDIA PRIVATE LIMITED shall provide such consultation by facsimile transmission, email through Internet services and/or regular mail. This will provide a complete record of all communications and advice and will considerably reduce the cost to both parties .Franchisee will use logo of “SW7 INFOMEDIA PRIVATE LIMITED” on every document of advertising. In case SW7 INFOMEDIA PRIVATE LIMITED publishes advertisement in print media, electronic media all of the franchise /sub franchise has to pay equally the incurred cost in advertisement.  <br>
<br><br>

<h4>4. Expenses </h4>
Client shall bear all expenses of Rent, Salary, Electricity, word processing, typing, photocopying and mailing of materials prepared on behalf of Client as well as telephone communications made by SW7 INFOMEDIA PRIVATE LIMITED 
 <br><br>
<h4>5. Cooperation</h4>
Client acknowledges that its cooperation is essential to the timely completion of the services to be performed by SW7 INFOMEDIA PRIVATE LIMITED pursuant to this agreement. Therefore, Client agrees to make its staff and facilities available to SW7 INFOMEDIA PRIVATE LIMITED upon reasonable request and to promptly provide SW7 INFOMEDIA PRIVATE LIMITED with all materials so requested and to timely respond to inquiries of SW7 INFOMEDIA PRIVATE LIMITED 
 <br><br>
<h4> 6. Confidentiality and Non-Competition</h4>
 
Franchisee hereby agrees that any and all information received from SW7 INFOMEDIA PRIVATE LIMITED shall be treated as absolutely confidential and shall not be divulged to any person or entity for any purpose whatsoever without the specific, written or e-mailed permission of the person signing below on behalf of "SW7 INFOMEDIA PRIVATE LIMITED" Franchisee further agrees that it will not compete in any manner during the agreement period in any business or venture related to the business of SW7 INFOMEDIA PRIVATE LIMITED unless at the specific written request of Franchisee.
<br>
NORMS, GUIDELINES, TO BECOME AN AUTHORISED FRANCHISEE REQUIRED NORMS Infrastructure<br><br>
A.	Client should have office infrastructure owned/rented with minimum space of  300  sq ft<br>
B.	Client shall set up 1 theory room and 1 practical room in the office. <br>
C.	Franchise Should be under the Main Banner of SW7 INFOMEDIA PRIVATE LIMITED <br>

<br>

<h4>7. Profit Ratio: </h4>
A.	SW7 INFOMEDIA PRIVATE LIMITED will share 10% profit (in Whole Monthly Student Fees without Deducting Expenses) and Client Will Share 90% of the profit.<br>
B.	Client needs to pay companies share monthly basis by cheque or RTGS on the name of SW7 INFOMEDIA PRIVATE LIMITED<br>
C.	If Company not Receive their share monthly, client will be charged 10% interest on Share Amount <br> 
D.	If client cannot deposit company share continue 2 month or more company will be withdraw their franchise at the time without intimation or later (No any type Refund will be made)<br>
E.	Profit will be calculated From Monthly Business on Total Fees.

<br><br>

<h4>8. Study Material</h4> 
Study material for all the courses will be provided by “SW7 INFOMEDIA PRIVATE LIMITED” to the Franchisee only after advance payment for the same. 
<br><br>
<h4>9. Mandatory </h4>
Maintenance of records & equipments-Following records are to be maintained by the franchisee & need to be updated on the daily basis. These should also be available for inspection at any point of time by SW7 INFOMEDIA PRIVATE LIMITED <br>
A.	Time Table  <br>
B.	Staff Attendance Register <br>
C.	Student Attendance register for each class signed by the respective teacher for each class <br>
D.	Issues register indicating issue enrolment card, franchisee study material, etc. <br>
E.	Record of practical’s conducted. <br>
F.	Computer & other lab equipments as per norms. <br>
G.	Receipts books.<br>



<br><br>


<h4>10. Admission & re-registrations</h4>
Authorized franchisee will ensure the following regarding new admissions and re registrations <br>
A.	Shall not accept the forms of not eligible candidates. <br>
B.	Shall accept only eligible student’s forms along with the course fee via demand draft in favour of “SW7 INFOMEDIA PRIVATE LIMITED” Payable at Pune.<br>
C.	All the forms shall accompany photocopies of certificates (attested by self) <br>
D.	Forms shall be submitted to the the SW7 INFOMEDIA PRIVATE LIMITED within 10 days receipt of the forms by the franchisee and last lot before the declared last date. Forms received by the SW7 INFOMEDIA PRIVATE LIMITED after the last date due any reason like, postal delays etc. will not be considered.<br>
E.	Shall be able to produce original certificates of the students as & when demanded.<br>
F.  Client should register student registration on companies given CRM (User ID And Password)<br>
G.	Client cannot divert or change admission or registration processor, if we found any Change in the processor company will take action or penalty on client. also withdraw their franchise without any later or intimation<br>   
<br><br>
<h4>11. Advertising</h4>
The Client shall advertise within the advertising policy and not use the logo or emblem of the SW7 INFOMEDIA PRIVATE LIMITED in local, regional or national media. The franchisee shall not make false claims in advertisements which may affect reputation of SW7 INFOMEDIA PRIVATE LIMITED<br><br>
<h4>SW7 INFOMEDIA PRIVATE LIMITED will not make any commitment for business or student admission </h4>
<h4>Company will provide only Inquiry data for his local area which will they get in their advertisement its Admission converting totally depend on Clint Consulting team </h4>
<br><br>
<h4>12. Change of address/change of name/change of constitution</h4>
Change of address/change of name/change of constitution of the authorized franchisee is not allowed in normal circumstances, however based on the merit of the case it can be considered with a non refundable processing fee of Rs.500/- 
<br><br>

<h4>13. Faculty </h4>
<h4>As per package Purchased by Client </h4>
Faculty Responsibility <h4> SW7 INFOMEDIA PRIVATE LIMITED </h4><br>
<b>Or CLIENT</b>.  Responsible Party Need to Complete Syllabus for their Student Given Timely Basis<br>
If Client Purchased Package with Trainer Client Need to Bear Trainer Room Rent / Hostel Charges Also Provide Security to Faculty<br>
If Client Purchased Package without Trainer then They Need to Complete Trainer Training within the Time Duration<br>
<h4>14. Admission</h4>
All admission forms submitted in the SW7 INFOMEDIA PRIVATE LIMITED will be provisionally admitted by the SW7 INFOMEDIA PRIVATE LIMITED till their eligibility is checked. Admission confirmation will take place only on the issue of enrolment certificate. 

<br><br>
<h4>15. Discontinuation</h4>
A Franchisee cannot discontinue Before Agreement Expiry Date & if any reason for Discontinuation franchisee agreement Fees will <b>Non Refundable </b>
also its service to students till the time all its enrolled students are shifted to another franchise or head office with facilities & services as per SW7 INFOMEDIA PRIVATE LIMITED norms. Also CLIENT may surrender all machinery and any material supplied by SW7 INFOMEDIA PRIVATE LIMITED.
<br><br>
<h4>16. Course fee collection </h4>
The franchisee will collect 100% course fee & other applicable fees from the students in the form of a demand draft/RTGS in a favour of “SW7 INFOMEDIA PRIVATE LIMITED” & submit the same to the SW7 INFOMEDIA PRIVATE LIMITED along with the admission/ re registration form. Head Office will then issue a cheque for the revenue sharing amount to the franchisee. 
<br><br>
<h4>17.Franchisee </h4> will be authorized under the banner of SW7 INFOMEDIA PRIVATE LIMITED
All disputes between SW7 INFOMEDIA PRIVATE LIMITED and CLIENT shall be resolved by an arbitration proceeding conducted at a location selected by the arbitrator within the city of PUNE in INDIA. The Pune Courts shall have exclusive jurisdiction to settle any disputes which may arise out of or in connection with the agreement.<br>
SW7 INFOMEDIA PRIVATE LIMITED reserves the right to introduce new norms or change the norms, rules & regulation, guidelines, administrative or any other matter related to education or any other form of education without prior intimation. This may include change in course fee, authorization fee, renewal fee, and other applicable fees, norms related to infrastructure, authorization norms, norms for teaching and norms for number of franchisee. All changes would be applicable to all the franchisee as well as students studying at all the franchisee. Franchisee would introduce new norms & make applicable all changes as declared from time to time by the SW7 INFOMEDIA PRIVATE LIMITED <br>
We have read carefully all the terms and conditions of the agreement and we agree and abide by the rules and regulations as specified in this agreement.
<br><br>
<h4>18. Another Franchise Distance:</h4>
Client should be note; company will give another franchise after 10km of his registered Location 
		<br><br>
		</div>

		<div class="d">
		<h4 class="card-header text-center" ><b>Scheme Details </b></h4>  
		<h4 class="card-header text-center" ><b>SW7&reg; Scheme 1 </b></h4>   
		<ul>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Faculty Training </b></li>
		 
		 <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Business Training</b></li>
		 <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b> Free Machinery</b> </li>
		 <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement</b></li>
		 <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Advertising Benefit</b></li>
		 <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Student Certificate</b></li>
		 <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Placement Cell</b></li>
		 <li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Company CRM 3 Yrs Support</b></li>
		 <li class="list-group-item text-success" style="border:none;"><b>Fees :  ₹ 70,800/-  &nbsp; &nbsp;(Including GST)</b></li>
		 <li class="list-group-item text-lowercase text-info" style="border:none;">(Non-Refundable)</li>
		 </ul>
	
		<h4 class="card-header text-center" ><b>SW7&reg; Scheme 2</b></h4>   
		<ul>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Faculty Provided by Company (Client Should Pay him Salary) </b></li>
		 <li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Business Training</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Machinery</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Scrap Material</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Advertising Benefit</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Student Certificate</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Placement Cell</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Company CRM 3 Yrs Support</b></li>
		<li class="list-group-item text-success" style="border:none;"><b>Fees : ₹  2,00,000/- &nbsp;(Including GST)</b></li>
		<li class="list-group-item text-lowercase text-info" style="border:none;">(Non-Refundable)</li>
		 </ul>
	
		 <h4 class="card-header text-center" ><b>SW7&reg; Scheme 3</b></h4>   
		<ul>
		<li class="list-group-item text-justify text-info" style="border:none;" ><b>(Company Operated)</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Faculty</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Furniture</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Machinery</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Free Scrap Material</b></li>
		<li class="list-group-item text-justify text-info" style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Business Training</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>3 Year Agreement</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Advertising Benefit</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Student Certificate</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Placement Cell</b></li>
		<li class="list-group-item text-justify text-info"style="border:none;"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<b>Company CRM 3 Yrs Support</b></li>
		<li class="list-group-item text-success text-success" style="border:none;"><b>Fees : ₹  5,00,000/- &nbsp;(Including GST)</b></li>
		<li class="list-group-item text-lowercase text-info" style="border:none;">(Non-Refundable)</li>
		 </ul>
		</div>

		<div class="d">
		<h4>Online Verified By '.$franchisee->first_name .' '.$franchisee->last_name.'</h4><br><br>		
		<h4>Authorized Signatory
		SW7 INFOMEDIA PRIVATE LIMITED

		      <br>

    Place:Thergoan, Pune</h4>

	</div>  
	</div>
</body>';
	
	//return $output;
	$franchisee->aggrement = $output;



				$franchisee->save();
				// $scheme = "";
				// if($amount == 70800.00)
				// {
				// 	$scheme = "scheme1";
				// }
				// else if($scheme == 200000.00)
				// {
				// 	$scheme = "scheme2";
				// }
				// else if($scheme == 500000.00)
				// {
				// 	$scheme = "scheme3";
				// }
			//	return $scheme;
				
				  
			//	}

				//agreement logic
				

		$created = $user->created_at->toDateString();
		$expiry = $user->created_at->addYears(3);
		$expiry_date = $expiry->toDateString();
		//return $expiry_date;
		$path= "{{ public_path('/images/new/logo1.jpeg') }}";
		$html = '<img src=>';
		
		//$output = '<center><img style="width:100px;height:100px" src="images/new/logo1.jpeg"><br><br>
		// $output = '
		// <center><br><br><br><h1>
		// SW7 INFOMEDIA PRIVATE LIMITED </h1><br><h2>Franchisee Development Agreement</h2></center><br><br><br>
		// This Agreement is made and entered into by and between <b>SW7 INFOMEDIA PRIVATE LIMITED Located at 10/1 Thergaon Chinchwad, Pune, Maharashtra India 411033 AND '
		// .$franchisee->first_name. $franchisee->last_name .'<br>'.$franchisee->address .'</b><br>'.
		// '(Herein after Client) effective this '.$created.' to '.$expiry_date.'<br><br>'.
		// '<b>(After 3 year Clint need to Renew their Agreement before Due Date – fees will be charged)</b><br>
		
		// WHEREAS, SW7 INFOMEDIA PRIVATE LIMITED has experience in the development and operation of franchising systems, including franchising agreements, offering circulars, registration materials, forms, training programs, marketing brochures, franchisee support programs, sales programs, and related services; and <br><br>
		// WHEREAS, Client desires to develop a franchising program and to market that program on a regional and national basis;<br><br>
		// THEREFORE, in consideration of the foregoing and the promises contained herein, the parties hereto agree as follows:<br><br>
		// ';

		// //return $output;	
		// $pdf = \App::make('dompdf.wrapper');
		// $pdf->loadHTML($output);
		// //return $pdf->stream();
		// // $pdf = \PDF::loadView('pdf.invoice', $output);

		// //\PDF::loadHTML($output)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');

	
		// \PDF::loadHTML($output)->setWarnings(false)->save('myfile.pdf');
		
	 
		//  $pdf = new \PDFMerger;
		//  $pdf->addPDF(public_path() . '/myfile.pdf', 'all');
		//  $pdf->addPDF(public_path() . '/images/storage/Agreement.pdf', '1,2,3,4,5,6,7');

		//  //$pdf->addPDF(public_path() . $franchisee->profile_image, 'all');
		//  $pdf->addPDF(public_path() . $franchisee->profile_pdf, 'all');
		//  $pdf->addPDF(public_path() . $document->pan_pdf, 'all');
		//  $pdf->addPDF(public_path() . $document->aadhar_pdf, 'all');
		//  $pdf->addPDF(public_path() . $document->gst_pdf, 'all');
		//  $pdf->addPDF(public_path() . $document->showpack_pdf, 'all');
		//  $pdf->addPDF(public_path() . $account->pdf, 'all');
		

		// $pathForTheMergedPdf = public_path() . "/images/storage/franchisees/".$franchisee->first_name."_".$franchisee->last_name."_Agreement.pdf";

        // // Merge PDFs into a file
		// $pdf->merge('file', $pathForTheMergedPdf);
		// $franchisee->remark5 = "/images/storage/franchisees/".$franchisee->first_name."_".$franchisee->last_name."_Agreement.pdf";
		

		$data = array('franchisee'=>$franchisee,'scheme'=>$scheme,'document'=>$document,'account'=>$account);

				  Mail::send('mail10', $data, function($message)  {
					  $message->to('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED')->subject
					  ('SW7 INFOMEDIA PRIVATE LIMITED Franchisee Scheme Notification');
					  $message->from('sales@sw7infomedia.com', 'SW7');
	
				  });
		 
				 
				  Mail::send('mail10', $data, function($message)  {
				  $message->to(Auth::user()->email, 'SW7')->subject
					 ('SW7 INFOMEDIA PRIVATE LIMITED Franchisee Scheme Order Bill');
					 $message->from('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED');
	
				  });

				return redirect('/')->with('success','Successfully Enroled for Franchisee Scheme ! Please check your email Inbox!');
		}

		public function getadmissions()
		{
			if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
			{
				$user = Auth::user();
				$franchisee = Franchisee::where('user_id', $user->id)->first();
				$admissions = Admission::where('franchisee_id',$franchisee->id)->get();
				return $admissions;
				return view('franchisee.admissions',['admissions'=>$admissions]);
			}
			else
			{
				return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
			}
		}

		public function convert_agreement_to_html()
		{
			$user = Auth::user();
			$franchisee = Franchisee::where('user_id', $user->id)->first();
			$created = $user->created_at->toDateTimeString();
		 $output = '
		 This Agreement is made and entered into by Client and between SW7 INFOMEDIA PRIVATE LIMITED <br>'
		 .$franchisee->first_name. $franchisee->last_name .'<br>'.
		 $franchisee->address .'<br>'.
		 '<b>(After 3 year Clint need to Renew their Agreement before Due Date – fees will be charged)</b><br>
		 
		 WHEREAS, SW7 INFOMEDIA PRIVATE LIMITED has experience in the development and operation of franchising systems, including franchising agreements, offering circulars, registration materials, forms, training programs, marketing brochures, franchisee support programs, sales programs, and related services; and <br>
		 WHEREAS, Client desires to develop a franchising program and to market that program on a regional and national basis;<br>
		 THEREFORE, in consideration of the foregoing and the promises contained herein, the parties hereto agree as follows:
		 ';
		   
	   // $franchisee->remark5 = $output;
		//$franchisee->save();
		return $output;
		}

	public function createpdf(Request $request)
    {
		$user = Auth::user();
		$franchisee = Franchisee::where('user_id', $user->id)->first();

	// 	$created = $user->created_at->toDateString();
	// 	$expiry = $user->created_at->addYears(2);
	// 	$expiry_date = $expiry->toDateString();
	// 	//return $expiry_date;
	// 	$path= "{{ public_path('/images/new/logo1.jpeg') }}";
	// 	$html = '<img src=>';
		
	// 	//$output = <div class="circle"><span style="color:black;font-size:10px;">SW7</span></div>
	// 	$output = '<html><head>
	// 	<style>
		
	// 	.circle
    // {
    // width:500px;
    // height:500px;
    // border-radius:250px;
    // font-size:50px;
    // color:#fff;
    // line-height:500px;
    // text-align:center;
	// background:#ffe6e6;
	// border-color: coral;
	// }
	// </style>
	// </head>
	// <body>
	// <center><br><br><br><h1>
	// 	SW7 INFOMEDIA PRIVATE LIMITED </h1><br><h2>Franchisee Development Agreement</h2></center><br><br><br>
	// 	This Agreement is made and entered into by and between <b>SW7 INFOMEDIA PRIVATE LIMITED Located at 10/1 Thergaon Chinchwad, Pune, Maharashtra India 411033 AND '
	// 	.$franchisee->first_name. $franchisee->last_name .'<br>'.$franchisee->address .'</b><br>'.
	// 	'(Herein after Client) effective this '.$created.' to '.$expiry_date.'<br><br>'.
	// 	'<b>(After 3 year Clint need to Renew their Agreement before Due Date – fees will be charged)</b><br>
		
	// 	WHEREAS, SW7 INFOMEDIA PRIVATE LIMITED has experience in the development and operation of franchising systems, including franchising agreements, offering circulars, registration materials, forms, training programs, marketing brochures, franchisee support programs, sales programs, and related services; and <br><br>
	// 	WHEREAS, Client desires to develop a franchising program and to market that program on a regional and national basis;<br><br>
	// 	THEREFORE, in consideration of the foregoing and the promises contained herein, the parties hereto agree as follows:<br><br>
	// 	</body></html>';

	// //	return $output;	
	// 	$pdf = \App::make('dompdf.wrapper');
	// 	$pdf->loadHTML($output);
	// 	//return $pdf->stream();
	// 	// $pdf = \PDF::loadView('pdf.invoice', $output);

	// 	//\PDF::loadHTML($output)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
	// 	\PDF::loadHTML($output)->setWarnings(false)->save('myfile.pdf');
	// 	$document = Document::where('user_id',$user->id)->first();
	// 	$account = Account::where('user_id',$user->id)->first();

	// 	 $pdf = new \PDFMerger;
	// 	 $pdf->addPDF(public_path() . '/myfile.pdf', 'all');
	// 	 $pdf->addPDF(public_path() . '/images/storage/Agreement.pdf', '1,2,3,4,5,6,7');

	// 	$pdf->addPDF(public_path() . $franchisee->profile_pdf, 'all');
	// 	$pdf->addPDF(public_path() . $document->pan_pdf, 'all');
	// 	$pdf->addPDF(public_path() . $document->aadhar_pdf, 'all');
	// 	$pdf->addPDF(public_path() . $document->gst_pdf, 'all');
	// 	$pdf->addPDF(public_path() . $document->showpack_pdf, 'all');
	// 	$pdf->addPDF(public_path() . $account->pdf, 'all');
	// 	 //$pdf->addPDF(public_path() . $document->showpack_pdf, 'all');
	// 	// $pdf->merge('browser', 'TEST2.pdf');
	// 	 // $pdf->merge('download', public_path() .'/images/storage'.'/'.$franchisee->first_name.'pdf'); // generate the file
		 
	// 	// $pdf->merge('browser', '/TEST2.pdf'); // generate the file
	// 	// $pdf->merge('download', '/'.$franchisee->first_name.'.pdf'); // force download

	// 	$pathForTheMergedPdf = public_path() . "/images/storage/franchisees/".$franchisee->first_name."_".$franchisee->last_name."_Agreement.pdf";

    //     // Merge PDFs into a file
	//     $pdf->merge('file', $pathForTheMergedPdf);
	
		return;
	}

	public function studentlist()
    {
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
            {
				$user = Auth::user();
				$franchisee = Franchisee::where('user_id', $user->id)->first();
				
				$temp = Admission::where('franchisee_id',$franchisee->id)->get();
				//return $students;
				$i=0;$students=array();
				foreach($temp as $temp1)
				{
					$students[$i] = Student::where('id',$temp1->studnt_id)->first();
					$i++;
				}
				$final  = array();

				foreach ($students as $current) {
					if ( ! in_array($current, $final)) {
						$final[] = $current;
					}
				}
				//return $final;
				$students=array();
				$students = $final;
                return view('franchisee.studentlist', ['students' => $students]);
            }
			else
			{
				return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
			}
		}
		
		public function student_documents(Request $request,$id)
		{
			if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
            {
			$student = Student::where('id',$id)->first();
			//return $student;
			return view('franchisee.student_doc',['student'=>$student]);
			}
			else
			{
				return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
			}
		}

		function download_bill(Request $request,$id)
		{
		$franchisee = Franchisee::where('id', $id)->first();
		$user =  Auth::user();
		if((Auth::check() && $id == $franchisee->id) || (Auth::user()->role="admin"))
		{
		 $pdf = \App::make('dompdf.wrapper');
		
		 $pdf->loadHTML($franchisee->aggrement)->setPaper('a4', 'legal');
		// $pdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
		 return $pdf->stream("Agreement.pdf");
		}
		else
		{
		 return redirect('/')->with('danger', 'Access Prohibited.');
		}
		}
}
