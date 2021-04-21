<?php

namespace App\Http\Controllers\Dealer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dealer;
use App\User;
use Auth;
use Hash;
use Mail;
use DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

class DealerController extends Controller
{

		public function index()
		{
				return view('dealer.dealer');
		}

		public function dealer_account(Request $request)
		{
			$dealer = Dealer::where('email',Auth::user()->email)->first();
			if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
			{
				return view('dealer.dealer_account');
			}
			else if($dealer->verify!=1)
			{
				$name = $dealer->first_name . " ". $dealer->last_name;
				$phone= $dealer->contact1;
				$email= $dealer->email;
				$link ="https://crestokart.com/verify/".$email;
				$data = array('name'=>$name,'phone'=>$phone,'email'=>$email,'link'=>$link);
				$request->session()->flash('success', 'Please check your email Inbox and Verify Email!');
					Mail::send('mail3', $data, function($message) use ($email) {
						$message->to($email, 'crestokart')->subject
						   ('Email Verification for Crestokart');
						   $message->from('sales@sw7infomedia.com', 'Crestokart');
				 
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
					return redirect('/dealer')->with('danger','Email Already Exists. Please Enter Another Email or Login.');
				}

					$dealer = new Dealer();

					if($request->file('image')){
						$file1 = $request->file('image');		
						$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
						$file1->move(base_path().'/public/images/storage/dealers/', $filename1);
						$dealer->dealer_image = '/images/storage/dealers/'.$filename1;
					}
					$dealer->first_name = $request->input('first_name');
					$dealer->last_name = $request->input('last_name');
					$dealer->email = $request->input('email');
                    $dealer->contact1 = $request->input('contact_no1');
                    $dealer->contact2 = $request->input('contact_no2');
					$dealer->password = $request->input('password');
					$dealer->category = $request->input('category');					
					$dealer->dob = $request->input('dob');
					$dealer->address = $request->input('address');
					$dealer->city = $request->input('city');
					$dealer->pincode = $request->input('pincode');
					$dealer->landline_no = $request->input('landline_no');
					$dealer->dispatch_time = $request->input('dispatch_time');
					$dealer->verify = 0;

					$user = new User();
				    $user->email = $request->input('email');
					$user->role = 'dealer';
					$user->status="Pending";
			

					if($request->input('password') === $request->input('confirm_password'))
					 {
						$password = Hash::make($request->input('password'));
						$user->password = $password;
						$user->save();

						$dealer->password = $password;
						$dealer->user_id = $user->id;
						$dealer->save();
						//return $dealer;

						$email = $request->input('email');
						$password = $request->input('password');
						$name = $request->input('first_name') . " ".$request->input('last_name');

       					if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'dealer'))
      					{
						$data = array('name'=>$name);
							Mail::send('dealer', $data, function($message) use($email) {
							$message->to($email, 'Crestokart')->subject
							('Welcome To Crestokart');
							$message->from('sales@sw7infomedia.com', 'Crestokart');

							});
						return redirect('/document')->with('success', 'Dealer Details Successfully Inserted, User Logged In.');
						}

					 }
					 else
					 {
						return redirect('/dealer')->with('danger','Both Passwords Do Not Match.');
					 }

			}

		public function edit()
	    {
			if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
			{
				$userid = Auth::user()->id;
				$dealer = Dealer::where('user_id',$userid)->first();
				if(!empty($dealer))
				{ 	
					return view('dealer.dealer_edit', ['dealer' => $dealer]);
				}
				else
				{
					return redirect('/')->with('danger', 'Dealer Not Found.');
				}
			}
		else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }

		}
		
		public function update(Request $request)
		{
			if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
			{
				$user = Auth::user();
				$dealer = Dealer::where('user_id', $user->id)->first();
				//return $dealer;			
					if(empty($dealer))
						return redirect('/')->with('danger', 'dealer not found');
					//return $dealer;
					$dealer->first_name = $request->input('first_name');
					$dealer->last_name = $request->input('last_name');
					$dealer->dob = $request->input('dob');
				    $dealer->email = $request->input('email');
					$dealer->contact1 = $request->input('contact_no1');
					$dealer->contact2 = $request->input('contact_no2');
                    $dealer->address = $request->input('address');
                    $dealer->city = $request->input('city');
					$dealer->pincode = $request->input('pincode');
					
					$image_path=$dealer->dealer_image;
					if($request->hasFile('image'))
					{
						if($image_path!="NA")
						{
						unlink(public_path() . "".$image_path );
						}
					$file1 = $request->file('image');		
					$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					$file1->move(base_path().'/public/images/storage/dealers/', $filename1);
					$customers->customer_image = '/images/storage/dealers/'.$filename1;
						
					}
					
					$user->role = 'dealer';
        
            if($request->input('password')!=='' && $request->input('password') === $request->input('confirm_password'))
            {
                $password = Hash::make($request->input('password'));			
                $user->password = $password;
                $user->save();

                $dealer->user_id = $user->id;
                $dealer->password = $password;
                $dealer->save();

                $email = $request->input('email');
                $password = $request->input('password');

                if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'dealer'))
                {
                    return redirect('/')->with('success', 'Customer Details Successfully Updated, User Logged In.');
                }
            }
            elseif($request->input('password')==='' && $request->input('password') === $request->input('confirm_password'))
            {
                $user->save();
                $dealer->save();
                return redirect('/')->with('success', 'Dealer Details Successfully Updated, User Logged In.');
            }
						
					return redirect('/')->with('success', 'Dealer has been successfully Updated');
			}
		else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
		}

		public function processToVerify(Request $request) {
			$email= $request->input('email');
			//return $email;
			$dealer = Dealer::where('email',$email)->first();
			 if($dealer->verify==1)
			{
			//return $email;
			$request->session()->flash('success', 'You are already verified !!');
			 return redirect()->route('user.signin');
			}
			$dealer->verify=1;
		   // $user->checkLogin=1;
			$dealer->save();
		   // Auth::login($user);
		  
			$name = $dealer->first_name . " ". $dealer->last_name;
			$phone= $dealer->contact1;
			$email= $dealer->email;
			$data = array('name'=>$name,'phone'=>$phone,'email'=>$email);
			//    Mail::send('mail6', $data, function($message)  {
			// 	 $message->to('majhitest@gmail.com', 'MajhiTest.com')->subject
			// 	 ('New User Notifications');
			// 	 $message->from('majhitest@gmail.com', 'MajhiTest.com');
	 
			// });
	 
		  
		 Mail::send('mail6', $data, function($message) use ($email) {
			$message->to($email, 'Crestokart')->subject
			   ('Verification Successful');
			   $message->from('sales@sw7infomedia.com', 'Crestokart');
	 
		   });
			 // $request->session()->flash('success', 'You have been Sign in Successfully!');
			 // return redirect()->route('user.profile');
			 $request->session()->flash('success', 'You are verified successfully!please, wait for next 2 business days for approval.');
			 return redirect()->route('user.signin');
		 }

		
}
