<?php

namespace App\Http\Controllers\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\User;
use Auth;
use Hash;
use Mail;
use DB;
use App\Order;
use App\Wishlist;
use App\Product;

class CustomerController extends Controller{

		public function index()
			{
				{
					return view('customer.customer');
				}
			}

			public function insert(Request $request)
			{		
				$check = User::where('email', $request->input('email'))->get()->first();
				//return $check;
				if($check != null)
				{
					//return "hello";
					return redirect('/customer')->with('danger','Email Already Exists. Please Enter Another Email or Login.');
				}
					$customers = new Customer();
					$customers->first_name = $request->input('first_name');
					$customers->last_name = $request->input('last_name');
					//$customers->dob = $request->input('dob');
				    $customers->email = $request->input('email');
                    $customers->contact = $request->input('contact');
                    $customers->address = $request->input('address');
                    //$customers->city = $request->input('city');
                    $customers->pincode = $request->input('pincode');
					
					if($request->file('image'))
					{
						$file1 = $request->file('image');		
						$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
						$file1->move(base_path().'/public/images/storage/customers/', $filename1);
						$customers->customer_image = '/images/storage/customers/'.$filename1;
					}
					

					$user = new User();
					$user->email = $request->input('email');
					$user->role = 'customer';
			

					if($request->input('password') === $request->input('confirm_password'))
					 {
						$password = Hash::make($request->input('password'));			
						$user->password = $password;
						$user->save();

						$customers->user_id = $user->id;
						$customers->password = $password;
						$customers->save();

						$name = $request->input('first_name') . " ".$request->input('last_name');
						$email = $request->input('email');
        				$password = $request->input('password');

       					if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'customer'))
      					{
							$data = array('name'=>$name);
							Mail::send('mail8', $data, function($message) use($email,$name) {
							$message->to($email, $name)->subject
							('Welcome To SW7 INFOMEDIA PRIVATE LIMITED');
							$message->from('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED');
							});
							return redirect('/')->with('success', 'Registered Succesffully!!.');
						}

					}
					 else
					 {
					 	return redirect('/customer')->with('danger','Both Passwords Do Not Match.');
					 }
		}
		
	public function customerEditProfile()
    {
        if(Auth::check())
        {
            $user = Auth::user();           
            $customer = Customer::where('user_id', $user->id) ->first();  
              
            if(!empty($customer))
            return view('customer.customer_edit', ['customer' => $customer]);                
        
            else
            {
                return redirect('user/login');
            }
        }
    }
	
		public function customerUpdateProfile(Request $request)
		{
			if(Auth::check() && ( Auth::user()->role == 'customer'  ||  Auth::user()->role == 'admin'))
			{
				$user = Auth::user();
				$customers = Customer::where('user_id', $user->id)->first();
							
					if(empty($customers))
						return redirect('/')->with('danger', 'Customer not found');
			
					$customers->first_name = $request->input('first_name');
					$customers->last_name = $request->input('last_name');
					//$customers->dob = $request->input('dob');
				    $customers->email = $request->input('email');
                    $customers->contact = $request->input('contact');
                    $customers->address = $request->input('address');
                   // $customers->city = $request->input('city');
					$customers->pincode = $request->input('pincode');
					
					$image_path=$customers->customer_image;
					if($request->hasFile('image'))
					{
						if($image_path!="NA")
						{
						unlink(public_path() . "".$image_path );
						}
					$file1 = $request->file('image');		
					$filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
					$file1->move(base_path().'/public/images/storage/customers/', $filename1);
					$customers->customer_image = '/images/storage/customers/'.$filename1;
						
					}
					
					$user->role = 'customer';
					$user->save();
					$customers->save();
        
            // if($request->input('password')!=='' && $request->input('password') === $request->input('confirm_password'))
            // {
            //     $password = Hash::make($request->input('password'));			
            //     $user->password = $password;
            //     $user->save();

            //     $customers->user_id = $user->id;
            //     $customers->password = $password;
            //     $customers->save();

            //     $email = $request->input('email');
            //     $password = $request->input('password');

            //     if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'customer'))
            //     {
            //         return redirect('/')->with('success', 'Customer Details Successfully Updated, User Logged In.');
            //     }
            // }
            // elseif($request->input('password')==='' && $request->input('password') === $request->input('confirm_password'))
            // {
            //     $user->save();
            //     $customers->save();
            //     return redirect('/')->with('success', 'Customer Details Successfully Updated, User Logged In.');
            // }
						
					return redirect('/')->with('success', 'customer has been successfully Updated');
			}
		}

		public function user_account()
		{
			if(Auth::check() && (Auth::user()->role == "customer") )
			{
				return view('customer.user_account');
			}	
			else
			{
				return redirect('/')->withErrors(['Error', 'Invalid user']);
			}
		}

		public function orderlist() {
			if(Auth::check() && (Auth::user()->role == "customer") )
			{
				$user= Auth::user();
				$orders = Order::where('user_id',$user->id)->orderBy('id', 'DESC')->paginate(4);
				$orders->transform(function ($order, $key){
					$order->cart = unserialize($order->cart);
					return $order;
					
				});
				return view('customer.orders',['orders' => $orders]);
		   }
		   else
		   {
			return redirect('/')->withErrors(['Error', 'Opps! Something Wrong']);
		   }
		}

		public function showproduct(Request $request, $id)
		{
			$product = Product::find($id);
			//return view('shop.productview', ['product' => $product]);
			if(Auth::check())
			{
				$user= Auth::user();
				$wishlist = Wishlist::where('user_id',$user->id)->first();
				if($wishlist=="")
				{
					//return "hello";
					 $productidsArr=null;
				   
					return view('shop.productview',['product' => $product,'productidsArr'=>null]); 
				}
				$productids = $wishlist->productids;
				$productidsArr = explode(',',$productids);
				return view('shop.productview',['product' => $product,'productidsArr'=>$productidsArr]);
			}
			else
			{
				return view('shop.productview',['product' => $product]);
			}
		}
		
		public function getWishlist() {
			$user= Auth::user();
			$wishlist = Wishlist::where('user_id',$user->id)->first();
			//return "hello";
		   //return $productids;
			if($wishlist==null)
			{
			   // return "ghg";
				return view('customer.wishlist',['products' => null]);
			}
			
			$productids = $wishlist->productids;
			if($productids =="")
			{
				return view('customer.wishlist',['products' => null]);
			}
			$temp = explode(',',$productids);
			$i=0;$products=array(); 
			foreach ($temp as $key => $value) 
			{
				$products[$i] = Product::where('id', $value)->first();
				$i++;
			   
			}
			return view('customer.wishlist',['products' => $products]);
		}
	
		public function RemoveFromWishlist(Request $request,$remove) {
			$user= Auth::user();
			$wishlist = Wishlist::where('user_id',$user->id)->first();
			$productids = $wishlist->productids;
		
			$temp = explode(',',$productids);
		   
			$i=0;$products=array(); 
			foreach ($temp as $key => $value) 
			{
			   if($value == $remove)
			   {
				unset($temp[$i]);
			   break;
			   }
			   $i++;
			}
			
			$str = implode(",",$temp);
		   
			$wishlist->productids = $str;
			$wishlist->save();
			$wishlist = Wishlist::where('user_id',$user->id)->first();

			if($wishlist==null)
			{
			   // return "ghg";
				return view('customer.wishlist',['products' => null]);
			}
			$productids = $wishlist->productids;
			if($productids =="")
			{
				return view('customer.wishlist',['products' => null]);
			}
			$temp = explode(',',$productids);
			$i=0;$products=array(); 
			foreach ($temp as $key => $value) 
			{
				$products[$i] = Product::where('id', $value)->first();
				$i++;
			   
			}
			return view('customer.wishlist',['products' => $products]);
		}
	
		public function addToWishlist(Request $request,$id) {
			$user= Auth::user();
			$wishlist = Wishlist::where('user_id',$user->id)->first();
			if($wishlist==null)
			{
			   // return "hello";
			   $wishlist = new  Wishlist();
			   $wishlist->user_id = $user->id;
			   $wishlist->productids = $id;
			   $wishlist->save();
			   //return $wish;
			   return response()->json(['wishlist'=>$wishlist]);
			}
			else
			{
				if($wishlist->productids == "")
				{
				  $wishlist->productids = $id;
				}
				else
				{
					$wishlist->productids = $wishlist->productids.",".$id;
				}
				
				$wishlist->save();
				//return $wishlist;
				return response()->json(['wishlist'=>$wishlist]);
			}
		   // return $wishlist;
		   // return view('user.profile',['orders' => $orders]);
		}

		public function RemoveFromWishlist1(Request $request,$remove) {
			$user= Auth::user();
			$wishlist = Wishlist::where('user_id',$user->id)->first();
			$productids = $wishlist->productids;
		
			$temp = explode(',',$productids);
		   
			$i=0;$products=array(); 
			foreach ($temp as $key => $value) 
			{
			   if($value == $remove)
			   {
				unset($temp[$i]);
			   break;
			   }
			   $i++;
			}
			
			$str = implode(",",$temp);
		   
			$wishlist->productids = $str;
			$wishlist->save();
			// $wishlist = Wishlist::where('user_id',$user->id)->first();

			// if($wishlist==null)
			// {
			//    // return "ghg";
			// 	return view('customer.wishlist',['products' => null]);
			// }
			// $productids = $wishlist->productids;
			// if($productids =="")
			// {
			// 	return view('customer.wishlist',['products' => null]);
			// }
			// $temp = explode(',',$productids);
			// $i=0;$products=array(); 
			// foreach ($temp as $key => $value) 
			// {
			// 	$products[$i] = Product::where('id', $value)->first();
			// 	$i++;
			   
			// }
			// return view('customer.wishlist',['products' => $products]);
			return response()->json(['wishlist'=>$wishlist]);
		}
}


