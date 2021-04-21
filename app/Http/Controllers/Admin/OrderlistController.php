<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use App\Batch;
use App\Franchisee;
use App\Student;
use App\Admission;
use Auth;
use Mail;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class OrderlistController extends Controller
{

    public function index()
    {
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
            $order = Order::all();
            $ordercount = Order::count();
            $usercount = User::count();
            $order->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            return view('admin.orderlist', ['order' => $order,'ordercount'=>$ordercount,'usercount'=>$usercount]);
        }
        else
        {
            return redirect('/');
        }
       
    }
   
    public function index2()
    {
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
            $order = Order::all();
            $ordercount = Order::count();
            $usercount = User::count();
            $order->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            return view('admin.orderlist2', ['order' => $order,'total'=>null,'start_date'=>null,'end_date'=>null]);
        }
        else
        {
            return redirect('/');
        }
       
    }
    
    public function updateorder(Request $request,$id)
    {
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
            $orders = Order::find($id);
            
            $user=$orders->user_id;
            //return $user;
            $useremail= User::where('id',$user)->first();
             $email=$useremail->email;
           // return $email;
           $status = $request->input('status');
           $reason = $request->input('reason');

            $orders->status = $request->input('status');
            
            $orders->reason= $request->input('reason');
            $data = array('status'=>$status,'reason'=>$reason,'orders'=>$orders);
    
            
            Mail::send('mail', $data, function($message) use($email) {
                $message->to($email, 'Crestokart')->subject
                ('Crestokart Order Status');
                $message->from('sales@sw7infomedia.com', 'Crestokart');

            });
            $orders->save();

            $orders = Order::all();
            return redirect('admin/orderlist')->with('success', 'orders has been successfully Updated');
        }
        else
        {
            return redirect('/');
        }
    }

    public function deleteorder($id)
    {
        $orders = Order::find($id);
        
        $orders->delete();


        return redirect('admin/orderlist')->with('orderlist',$orders);
    }

    public function admincart(Request $request,$id)
    {
      
        $order = Order::where('id',$id)->first();
        $order->cart = unserialize($order->cart);
        $cart = $order->cart;   
        Session::put('cart', $cart);
        return view('admin.admincart',['order'=>$order]);
    }

    public function getadmissions($id)
    {
        $batch = Batch::where('id',$id)->first();
        $admissions = Admission::where('batch_id',$batch->id)->get();
       return view('admin.admissions',['admissions'=>$admissions]);
    }

    public function ordersRecords(Request $request)
    {
     $start_date = $request->get('start_date');
     $end_date1 = $end_date = $request->get('end_date');
     $end_date = Carbon::parse($end_date)->addDays(1);
     //return $end_date;    

     $order = Order::where('created_at','>=',$start_date)->where('created_at','<=',$end_date)->get();

     $total = 0; $gst_total = 0; 
     $orders = $order; 
    // return $orders;
     foreach($orders as $order)
     {
        $order->cart = unserialize($order->cart);
        $total = $total + $order->cart->totalPrice;
     }
     $gst_total = $total * 0.1525;
    // return $gst;
    $order = Order::where('created_at','>=',$start_date)->where('created_at','<=',$end_date)->get();
    $order->transform(function ($order, $key){
        $order->cart = unserialize($order->cart);
        return $order;
    });

    $start_date = new Carbon($start_date);
    $end_date = new Carbon($end_date1);
     // return $total;
     //return view('admin.admissions', ['franchisees' => $franchisees,'total'=>$total,'gst_total'=>$gst_total]);
     return view('admin.orderlist2',['order' => $order,'total'=>$total,'gst_total'=>$gst_total,'start_date'=>$start_date,'end_date'=>$end_date]);
    }
}
?>