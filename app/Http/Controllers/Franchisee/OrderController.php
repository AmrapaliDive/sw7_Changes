<?php

namespace App\Http\Controllers\Dealer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\User;
use App\Dealer;
use App\Customer;
use App\Cart;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;
use Mail;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
          if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
          {
           // $orders = Order::all();
             $orders = Order ::orderBy('id','desc')->get();
            $orders->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            $dealer = Dealer::where('email',Auth::user()->email)->first();
            $k=0;
            $myorder=array();
            foreach($orders as $order)
            {
                // $oldCart = Session::has('cart') ? Session::get('cart') : null;
                // $cart = new Cart($oldCart);
              //  $cart =  serialize($order->cart);
                       
                $i=0;$j=0;$itemname=array();
                $flag=0;
                foreach($order->cart->items as $item)
                {          
                  if ($item['item']['dealer_id']==$dealer->id)
                  {
                    $itemname[$i] = $item;
                    $j++;
                    $flag=1; 
                  }
                    $i++;
                    
                }
                if($flag==1)
                {
                  $myorder[$k] = $order; 
                  $k++;
                }
             
              // print_r($itemname);
              // echo("<br><br>");
            }
            //return $myorder;
            return view('dealer.orderlist', ['myorder' => $myorder,'dealer'=>$dealer]);
          }
          else
          {
            return redirect('/')->withErrors(['Error', 'Opps! Something Wrong']);
          }
        }
 
        public function dealer_order_table()
        {
          if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
          {
           // $orders = Order::all();
             $orders = Order ::orderBy('id','desc')->get();
            $orders->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            $dealer = Dealer::where('email',Auth::user()->email)->first();
            $k=0;
            $myorder=array();
            foreach($orders as $order)
            {
                // $oldCart = Session::has('cart') ? Session::get('cart') : null;
                // $cart = new Cart($oldCart);
              //  $cart =  serialize($order->cart);
                       
                $i=0;$j=0;$itemname=array();
                $flag=0;
                foreach($order->cart->items as $item)
                {          
                  if ($item['item']['dealer_id']==$dealer->id)
                  {
                    $itemname[$i] = $item;
                    $j++;
                    $flag=1; 
                  }
                    $i++;
                    
                }
                if($flag==1)
                {
                  $myorder[$k] = $order; 
                  $k++;
                }
             
              // print_r($itemname);
              // echo("<br><br>");
            }
            //return $myorder;
            return view('dealer.orders', ['myorder' => $myorder,'dealer'=>$dealer]);
          }
          else
          {
            return redirect('/')->withErrors(['Error', 'Opps! Something Wrong']);
          }
        }

        public function dealercart(Request $request,$id)
    {
      if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
            $dealer = Dealer::where('email',Auth::user()->email)->first();
            $orders = Order::where('id',$id)->first();
            $orders->cart = unserialize($orders->cart);
            $cart = $orders->cart;   
            Session::put('cart', $cart);
           
            $request->session()->forget('cart'); 
            return view('dealer.dealercart',['orders'=>$orders,'dealer'=>$dealer]);
        }
        else
        {
            return redirect('/');
        }
       
    }

    public function updateorder(Request $request,$orderid,$productid)
    {
      if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
            $dealer = Dealer::where('email',Auth::user()->email)->first();
            $order = Order::where('id',$orderid)->first();

            $order->cart = unserialize($order->cart);
            $cart = $order->cart;   
            Session::put('cart', $cart);

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
           
           $i=0;
           foreach($cart->items as $item)
             {          
               if($item['item']['id']==$productid)
               {
                //return $productid; 
                $status= $request->get('status');
                $reason= $request->get('reason');
                $cart->operation($productid,$status,$reason);
               break;
               }
             $i++;
             }
            
             $cart = serialize($cart);
             //return $cart;
             $order->cart = $cart;
             $order->save(); 
             
             $customer = Customer::where('user_id',$order->user_id)->first();
             $product = Product::where('id',$productid)->first();
             $data = array('product'=>$product,'status'=> $status,'reason'=>$reason);

             Mail::send('mail9', $data, function($message) use($customer) {
              $message->to($customer->email, $customer->first_name)->subject
                 ('Product Status');
                 $message->from('sales@sw7infomedia.com', 'Crestokart');

              });

            $request->session()->forget('cart'); 
           
            $dealer = Dealer::where('email',Auth::user()->email)->first();
            $orders = Order::where('id',$orderid)->first();
            $orders->cart = unserialize($orders->cart);
            $cart = $orders->cart;   
            Session::put('cart', $cart);
           
            $request->session()->forget('cart'); 
            return view('dealer.dealercart',['orders'=>$orders,'dealer'=>$dealer]);
        }
        else
        {
            return redirect('/');
        }
    }
}
