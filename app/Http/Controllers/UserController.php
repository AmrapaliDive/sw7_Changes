<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getSignUp() {
        return view('user.signup');
    }

    public function postSignUp(Request $request) {
        // $cnumber = $request->input('cnumber');
        // return $cnumber;

        $this->validate($request, [
           'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'name' => '',
            'cnumber' => ''
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'name' => $request->input('name'),
            
        ]);
        $user->cnumber=$request->input('cnumber');
        $user->address=$request->input('address');
        $user->save();
      
        Auth::login($user);
        if (Session::has('oldUrl')) {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }
        $email = Auth::user()->email;
        $data = array();
    
            
        Mail::send('mail8', $data, function($message) use($email) {
            $message->to($email, 'Bhajiwala')->subject
            ('Welcome');
            $message->from('sales@sw7infomedia.com', 'Bhajiwala');
        });
        return redirect()->route('user.profile');
    }
    public function edituser()
    {

        return view('user.edituser');
    }

    public function updateuser(Request $request)
    {
         
            // $user = User::find($id);
            $id = Auth::user()->id;
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->cnumber = $request->input('cnumber');
            $user->address= $request->input('address');
        
            $user->save();

            return redirect()->route('user.profile');
         
      
    }
    
    public function getSignIn() 
    {
        return view('user.signin');
    }

    public function postSignIn(Request $request) {
        $email = $request->get('email');
        $user = User::where('email',$email)->first();

        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
            'password' => 'required|min:6'
           
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        if($user==null)
       {
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'approve' => 'Wrong email or password.',
        ]);
       }
        // if($user->role="" || $user->status=="Pending"){
        //     $request->session()->flash('danger', ' Register granted Wait for Approval.Plz Contact:'.$user->cnumber.' to admin for verification!!');
        //     return redirect('/');
        // }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password ], $request->remember)) 
        {
            // if successful -> redirect forward
           // return redirect()->intended(route('user.overview'));
           $request->session()->flash('success', 'You have been logged in Successfully!');
           if (Auth::attempt(['email' => 'admin@gmail.com', 'password' => $request->input('password')]))
           {
            if (Session::has('oldUrl')) 
                {
                    $oldUrl = Session::get('oldUrl');
                    Session::forget('oldUrl');
                    return redirect()->to($oldUrl);     
                    
                }
            $request->session()->flash('success', 'You have been logged in Successfully!');
            return redirect('/admin');
           }

       else if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
       {
      
            if (Session::has('oldUrl')) 
            {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }       
            $email = Auth::user()->email;
            $data = array();
        
                
            // Mail::send('mail8', $data, function($message) use($email) {
            //     $message->to($email, 'Bhajiwala')->subject
            //     ('Welcome');
            //     $message->from('sales@sw7infomedia.com', 'Bhajiwala');
            // });
            return redirect()->route('user.profile');
        }
    
        return redirect()->back();

        
    }
    return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'approve' => 'Wrong email or password.',
            ]);
    }



    public function getUserProfile() {
        $user= Auth::user();
      //  $user = User::find($userid)->first();
      //  return $user;
        $orders = Order::where('user_id',$user->id)->orderBy('id', 'DESC')->paginate(4);
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
            
        });
        return view('user.profile',['orders' => $orders]);
    }

    public function ordersearch(Request $request){
        $searchNutInput =  $request->input('psearch');
      //  return $searchNutInput;
        $orders= Order::where( 'status', 'LIKE', '%' .  $searchNutInput . '%')->paginate(4);
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
            
        });
        return view('user.profile',['orders' => $orders]);
    }

    public function index()
    {
      return view('user.signin');
    }
   
   
   
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
            'password' => 'required|min:6'
           
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'admin'))
        {
            return redirect('/admin');
        }
          
        elseif(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'franchisee'))
        {
            return redirect('/franchisee_account');
        }

        elseif(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'customer'))
        {
            return redirect('/')->with('success','Login Successfully!!');
        }

        elseif(Auth::attempt(['email' => $email, 'password' => $password]) && (Auth::user()->role == 'student'))
        {
            return redirect('/')->with('success','Login Successfully!!');
        }

        else
        {
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'approve' => 'Wrong email or password.',
            ]);
            //return redirect('/user/login')->with('alert', 'Please Enter Valid Email and Password.');
        }
    }
    
    
    
    
    
    public function getLogout(Request $request) {
        if(Auth::check())
        {
            Auth::logout();
            $request->session()->flash('success', 'You have logged out successfully!');
            $request->session()->forget('cart');
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }

        }
}
