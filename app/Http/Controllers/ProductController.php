<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Dealer;
use App\Customer;
use App\Batch;
use App\Wishlist;
use App\website_setting;
use App\Order;
use App\Cart;
use Session;
use Mail;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Razorpay\Api\Api;
use App\Franchisee;

class ProductController extends Controller
{
    public function getIndex(){
        $searchNutInput = "product";
        $products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orWhere ('subtype', 'LIKE', '%' .  $searchNutInput . '%')->get();		
    
        return view('shop.product',['products' => $products]);
    }

    public function getItem(Request $request){
    //     $searchNutInput =  $request->input('psearch');
    //     //$products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orwhere( 'subtype', 'LIKE', '%' .  $searchNutInput . '%')->orwhere( 'product_name', 'LIKE', '%' .  $searchNutInput . '%')->get();		
    //     $city = $request->get('city');
    //     //return $city;
    //    // $batches1 = Batch::where('batch_name', 'LIKE', '%' .  $searchNutInput . '%')->get();
       
    //     $franchisee = Franchisee::where('city','LIKE','%'.$city.'%')->first();
    
       
    //     $batches = Batch::where('batch_name', 'LIKE', '%' .  $searchNutInput . '%')->where('user_id',$franchisee->user_id)->first();
    //     //return $batches;
    //     //return view('shop.searchproduct',['products' => $products,'batches' => $batches]);
    //     return view('shop.searchproduct',['batches' => $batches]);

    $searchNutInput =  $request->input('psearch');
    $products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orwhere( 'subtype', 'LIKE', '%' .  $searchNutInput . '%')->orwhere( 'product_name', 'LIKE', '%' .  $searchNutInput . '%')->get();		
    return view('shop.searchproduct',['products' => $products]);   
    }
    
    public function getAddToCart(Request $request,$id,$qty,$amount) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id , $qty,$amount);
        $request->session()->put('cart', $cart);
        return response()->json(['product'=>$product,'cart'=>$cart]);
        }

  
        public function getAddToCart1(Request $request,$id,$qty,$amount)
        {
 
         $product = Product::find($id);
         $oldCart = Session::has('cart') ? Session::get('cart') : null;
         $cart = new Cart($oldCart);
         $cart->removeItem($id);
         $cart->add($product, $product->id , $qty,$amount);
         $request->session()->put('cart', $cart);
           return response()->json(['product'=>$product,'cart'=>$cart]);
         }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        

        $cart  = new Cart($oldCart);
      
        // if($cart->totalPrice>3000)
        // {
        //     $delivery = website_setting::where('range', '=' ,3000)->first();
           
        // }  
        // elseif($cart->totalPrice>2000)
        // {
        //     $delivery = website_setting::where('range', '=' ,2000)->first();
        // }  
        // elseif($cart->totalPrice>1000)
        // {
        //     $delivery = website_setting::where('range', '=' ,1000)->first();
        // }    
        // elseif($cart->totalPrice<1000)
        // {
        //     $delivery = website_setting::where('range', '=' ,0)->first();
        // }    
        
        return view('shop.shopping-cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }


    public function getCheckout(Request $request) {
        if(Auth::user()->role!="customer")
        {
            $request->session()->forget('cart');            
            return redirect('/')->withErrors(['Error', 'Please Login with Customer Credentials to Purchase Products!!']);
        }
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $customer = Customer::where('email',Auth::user()->email)->first();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
       
        // if($cart->totalPrice>3000)
        // {
        //     $delivery = website_setting::where('range', '=' ,3000)->first();
        //     $grandtotal = $total+$delivery->value;
        // }  
        // elseif($cart->totalPrice>2000)
        // {
        //     $delivery = website_setting::where('range', '=' ,2000)->first();
        //     $grandtotal = $total+$delivery->value;
        // }  
        // elseif($cart->totalPrice>1000)
        // {
        //     $delivery = website_setting::where('range', '=' ,1000)->first();
        //     $grandtotal = $total+$delivery->value;
        // }    
        // elseif($cart->totalPrice<1000)
        // {
        //     $delivery = website_setting::where('range', '=' ,0)->first();
        //     $grandtotal = $total+$delivery->value;
        // }    
       
        return view('shop.check', ['total' => $total,'customer'=>$customer]);
    }

    public function onlinePayment(Request $request) {
        if(Auth::user()->role!="customer")
        {
            $request->session()->forget('cart');            
            return redirect('/')->withErrors(['Error', 'Please Login with Customer Credentials to Purchase Products!!']);
        }

        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $customer = Customer::where('email',Auth::user()->email)->first();
        // if($cart->totalPrice>3000)
        // {
        //     $delivery = website_setting::where('range', '=' ,3000)->first();
        //     $total = $total+$delivery->value;
        // }  
        // elseif($cart->totalPrice>2000)
        // {
        //     $delivery = website_setting::where('range', '=' ,2000)->first();
        //     $total = $total+$delivery->value;
        // }  
        // elseif($cart->totalPrice>1000)
        // {
        //     $delivery = website_setting::where('range', '=' ,1000)->first();
        //     $total = $total+$delivery->value;
        // }    
        // elseif($cart->totalPrice<1000)
        // {
        //     $delivery = website_setting::where('range', '=' ,0)->first();
        //     $total = $total+$delivery->value;
        // }    
       
        return view('shop.onlinePayment2', ['total' => $total,'customer'=>$customer]);
    }

    public function savedetails(REquest $request)
    {
        $name = $request->get('name');
        $phone = $request->get('mobno');
        $address = $request->get('address1');
        Session::put('name',$name);
        Session::put('phone',$phone);
        Session::put('address',$address);

        if (!Session::has('cart')) {
            return redirect()->route('product.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $customer = Customer::where('user_id',Auth::user()->id)->first();
        return view('shop.razorpay',['products' => $cart->items, 'totalPrice' => $cart->totalPrice,'total'=>$total,'customer'=>$customer]);       
    }

    public function postCheckout(Request $request) {
        if (!Session::has('cart')) {
            return redirect()->route('product.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

            $order = new Order();
            $itemss = "";
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->status ="Accepted";
            $order->reason ="";
            $order->payment_method= "Cash On Delivery";
           // $order->payment_id = $charges->id;

            $cart = new Cart($oldCart);

         
           $i=0;$j=0;$dealers=array();
           foreach($cart->items as $item)
             {          
               $itemname[$i] =$item;
               if (!(in_array($item['item']['dealer_id'], $dealers)))
               {
                $dealers[$j] = $item['item']['dealer_id'];
                $j++;
               }
               $i++;
             }
            //return $dealers;
            $total = $cart->totalPrice;
            $totalQty = $cart->totalQty;
            $deliveryCharges =  0;

            // if($cart->totalPrice>3000)
            // {
            //     $delivery = website_setting::where('range', '=' ,3000)->first();
            //     $grandtotal = $total+$delivery->value;
            // }  
            // elseif($cart->totalPrice>2000)
            // {
            //     $delivery = website_setting::where('range', '=' ,2000)->first();
            //     $grandtotal = $total+$delivery->value;
            // }  
            // elseif($cart->totalPrice>1000)
            // {
            //     $delivery = website_setting::where('range', '=' ,1000)->first();
            //     $grandtotal = $total+$delivery->value;
            // }    
            // elseif($cart->totalPrice<1000)
            // {
            //     $delivery = website_setting::where('range', '=' ,0)->first();
            //     $grandtotal = $total+$delivery->value;
            // }    
            Auth::user()->orders()->save($order);
            $email =Auth::user()->email;
            $name = $request->get('name'). ' | Phone Number ' .$request->input('mobno');
            $address = $request->input('address');
            $data = array('name'=>$name,'address'=>$address,'total' => $total,'totalQty' => $totalQty,'itemname'=> $itemname,'order'=>$order);
    
            
              Mail::send('mail0', $data, function($message)  {
                  $message->to('sales@sw7infomedia.com', 'SW7')->subject
                  ('Customer Invoice Notifications');
                  $message->from('sales@sw7infomedia.com', 'SW7');

              });
     
             
              Mail::send('mail0', $data, function($message) use($email) {
                $message->to($email, 'SW7')->subject
                ('SW7 INFOMEDIA PRIVATE LIMITED Product Order Invoice');
                   $message->from('sales@sw7infomedia.com', 'SW7');
  
                });
     
      
            Auth::user()->orders()->save($order);
              

        //Session::forget('cart');
        $request->session()->forget('cart');
        return redirect()->route('product.product')->with('success','Successfully purchased products!Please check your email Inbox!');
    }

    // public function transactionSuccess(Request $request) {
    //     // if (!Session::has('cart')) {
    //     //     return redirect()->route('product.shoppingcart');
    //     // }
    //     $status=$request->get('status');
	// 		$firstname=$request->get('firstname');
	// 		$amount=$request->get('amount');
	// 		$txnid=$request->get('txnid');
	// 		$posted_hash=$request->get('hash');
	// 		$key=$request->get('key');
	// 		$productinfo=$request->get('productinfo');
	// 		$email=$request->get('email');
	// 		$salt="YAFfyRAHeB";
	// 		$key = "FsSzqFiq";       //MERCHANT_KEY
	
	// 		$retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
	// 		$hash = hash("sha512", $retHashSeq);
	// 	   if ($hash != $posted_hash) 
	// 	  {
	// 		   echo "Invalid Transaction. Please try again";
	// 	  } 
	// 	   else 
	// 	  {
	// 		//  echo "<h3>Thank You. Your order status is \n". $status.". </h3>";
	// 		//  echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
	// 		//  echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
	// 		//echo "<br>";
    //       }
    //       $oldCart = Session::get('cart');
    //       $cart = new Cart($oldCart);
    //       $porder = Order::where('payment_id',$txnid)->first();
	// 	  if(empty($porder)){ 
    //         $order = new Order();
    //         $itemss = "";
    //         $order->cart = serialize($cart);
    //         $order->address = $request->get('address1');           //check address is remaining
    //         //    $order->name = $request->input('firstname'). " ".$request->input('lastname');
    //         $order->name = $request->get('firstname');
    //         $order->status ="Accepted";
    //         $order->reason ="";
    //         $order->payment_method= "Online Payment";
    //        // $order->payment_id = $charges->id;
    //        Auth::user()->orders()->save($order);
    //        $cart = new Cart($oldCart);

         
    //        $i=0;
    //        foreach($cart->items as $item)
    //          {          
    //            $itemname[$i] =$item;
    //            $i++;
    //          }
    //         $total = $cart->totalPrice;
    //         $totalQty = $cart->totalQty;
    //         $deliveryCharges =  0;

    //         // if($cart->totalPrice>3000)
    //         // {
    //         //     $delivery = website_setting::where('range', '=' ,3000)->first();
    //         //     $grandtotal = $total+$delivery->value;
    //         // }  
    //         // elseif($cart->totalPrice>2000)
    //         // {
    //         //     $delivery = website_setting::where('range', '=' ,2000)->first();
    //         //     $grandtotal = $total+$delivery->value;
    //         // }  
    //         // elseif($cart->totalPrice>1000)
    //         // {
    //         //     $delivery = website_setting::where('range', '=' ,1000)->first();
    //         //     $grandtotal = $total+$delivery->value;
    //         // }    
    //         // elseif($cart->totalPrice<1000)
    //         // {
    //         //     $delivery = website_setting::where('range', '=' ,0)->first();
    //         //     $grandtotal = $total+$delivery->value;
    //         // }
    //         $grandtotal = $total;
    //         $name = $request->get('firstname'). ' | Phone Number ' .Auth::user()->cnumber;
    //         $address = $request->get('address1');
    //         $data = array('name'=>$name,'address'=>$address,'total' => $total,'totalQty' => $totalQty,'itemname'=> $itemname,'order'=>$order);
    
            
    //           Mail::send('mail0', $data, function($message)  {
    //               $message->to('sales@sw7infomedia.com', 'SW7')->subject
    //               ('SW7 Order Bill');
    //               $message->from('sales@sw7infomedia.com', 'SW7');

    //           });
     
             
    //           Mail::send('mail0', $data, function($message)  {
    //           $message->to(Auth::user()->email, 'SW7')->subject
    //              ('SW7 Order Bill');
    //              $message->from('sales@sw7infomedia.com', 'SW7');

    //           });
              
           
    //         Session::forget('cart');
    //       }
     
    //    return redirect()->route('product.product')->with('success','Successfully purchased products!Please check your email Inbox!');
    // }

    public function transactionSuccess(Request $request) {
      
        $input = Input::all();
        //get API Configuration 
        $api = new Api(config('custom2.razor_key'), config('custom2.razor_secret'));
        //Fetch payment information by razorpay_payment_id
        $payment = $api->payment->fetch($input['razorpay_payment_id']);


        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
    
            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
                  
              $order = new Order();
              $itemss = "";
              $order->cart = serialize($cart);
              $address = Session::get('address');
              $name = Session::get('name');
              $phone = Session::get('phone');
              $order->address = $address;           //check address is remaining
              //    $order->name = $request->input('firstname'). " ".$request->input('lastname');
              $order->name = $name;
              $order->status ="Accepted";
              $order->reason ="";
              $order->payment_method= "Online Payment";
              $order->payment_id = $input['razorpay_payment_id'];
             Auth::user()->orders()->save($order);
             $cart = new Cart($oldCart);
  
           
             $i=0;
             foreach($cart->items as $item)
               {          
                 $itemname[$i] =$item;
                 $i++;
               }
              $total = $cart->totalPrice;
              $totalQty = $cart->totalQty;
              $deliveryCharges =  0;
  
              
              $grandtotal = $total;
              $name = $name. ' | Phone Number ' .$phone;
              $data = array('name'=>$name,'address'=>$address,'total' => $total,'totalQty' => $totalQty,'itemname'=> $itemname,'order'=>$order);
               //stock management
               $collection = collect($request->input('p_id'));
               for ($i = 0; $i < $collection->count(); $i++) {
            
                DB::table('products')->where('id', $request->input('p_id')[$i])->decrement('stock',(int)$request->get('qty')[$i]);
                }
              
                Mail::send('mail0', $data, function($message)  {
                    $message->to('sales@sw7infomedia.com', 'SW7')->subject
                    ('Customer Invoice Notifications');
                    $message->from('sales@sw7infomedia.com', 'SW7');
  
                });
       
               
                Mail::send('mail0', $data, function($message)  {
                $message->to(Auth::user()->email, 'SW7')->subject
                   ('SW7 INFOMEDIA PRIVATE LIMITED Product Order Invoice');
                   $message->from('sales@sw7infomedia.com', 'SW7');
  
                });
                
             Session::forget('name');
             Session::forget('address');
             Session::forget('phone');
             Session::forget('cart');
        }
        
          
     
       return redirect()->route('product.product')->with('success','Successfully purchased products!Please check your email Inbox!');
    }

    public function deductByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deductByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingcart');
    }

    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingcart');
    }

    public function dropdownsearch(Request $request)
    {
     $psearch =  $request->get('psearch');
     $category =  $request->get('category');
     $products = Product::where( 'approved','yes')->where('product_name','LIKE','%'.$psearch.'%')->orwhere('type','LIKE','%'.$psearch.'%')->orwhere('subtype','LIKE','%'.$psearch.'%')->get();
    // return $products;
    if($category=="")
    {
        // return $products;
        if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       } 
    }
    
    else if($category == "Electronics")
    {
        $products = Product::where('approved','yes')->where('type', 'Electronics')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    }

    else if($category == "Books")
    {
        $products = Product::where('approved','yes')->where('type', 'Books')->get();
     //   return $products;
     if(Auth::check())
     {
         $user= Auth::user();
         $wishlist = Wishlist::where('user_id',$user->id)->first();
         if($wishlist=="")
         {
             //return "hello";
              $productidsArr=null;
            
             return view('shop.product',['products' => $products,'productidsArr'=>null]); 
         }
         $productids = $wishlist->productids;
         $productidsArr = explode(',',$productids);
         return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
     }
     else
     {
         return view('shop.product',['products' => $products]);
     }
    }

    else if($category == "Cameras & Photo")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Camera')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    }

    else if($category == "Cell Phones")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Cell Phones')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    }

    else if($category == "Womens Clothing")
    {
        $products = Product::where('approved','yes')->where('subtype', 'women clothing')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    }

    else if($category == "Watches Part & Accessories")
    {
        $products = Product::where('approved','yes')->where('subtype', 'watch')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    }

    else if($category == "Coins & Paper Money")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Coins & Paper Money')->get();
        //return $products;
        if(Auth::check())
        {
            $user= Auth::user();
            $wishlist = Wishlist::where('user_id',$user->id)->first();
            if($wishlist=="")
            {
                //return "hello";
                 $productidsArr=null;
               
                return view('shop.product',['products' => $products,'productidsArr'=>null]); 
            }
            $productids = $wishlist->productids;
            $productidsArr = explode(',',$productids);
            return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
        }
        else
        {
            return view('shop.product',['products' => $products]);
        }
    }

    else if($category == "Collectibles")
    {
        $products = Product::where('approved','yes')->where('type', 'Collectibles')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 
    
    else if($category == "computerNetwork")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Computer Network')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 

    else if($category == "Crafts")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Scrapbooking & Paper Craft Supplies')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 

    else if($category == "Memorabillia")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Entertainment Memorabilia')->get();
      //  return $products;
      if(Auth::check())
      {
          $user= Auth::user();
          $wishlist = Wishlist::where('user_id',$user->id)->first();
          if($wishlist=="")
          {
              //return "hello";
               $productidsArr=null;
             
              return view('shop.product',['products' => $products,'productidsArr'=>null]); 
          }
          $productids = $wishlist->productids;
          $productidsArr = explode(',',$productids);
          return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
      }
      else
      {
          return view('shop.product',['products' => $products]);
      }
    } 

    else if($category == "Health & Beauty")
    {
        $products = Product::where('approved','yes')->where('type', 'Health & Beauty')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 

    else if($category == "Pet Supplies")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Pet Supplies')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 

    else if($category == "Team Sports")
    {
        $products = Product::where('approved','yes')->where('subtype', 'team sports')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 

    else if($category == "Stamps")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Stamps')->get();
      //  return $products;
      if(Auth::check())
      {
          $user= Auth::user();
          $wishlist = Wishlist::where('user_id',$user->id)->first();
          if($wishlist=="")
          {
              //return "hello";
               $productidsArr=null;
             
              return view('shop.product',['products' => $products,'productidsArr'=>null]); 
          }
          $productids = $wishlist->productids;
          $productidsArr = explode(',',$productids);
          return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
      }
      else
      {
          return view('shop.product',['products' => $products]);
      }
    } 

    else if($category == "Video Games")
    {
        $products = Product::where('approved','yes')->where('subtype', 'Video games')->get();
       // return $products;
       if(Auth::check())
       {
           $user= Auth::user();
           $wishlist = Wishlist::where('user_id',$user->id)->first();
           if($wishlist=="")
           {
               //return "hello";
                $productidsArr=null;
              
               return view('shop.product',['products' => $products,'productidsArr'=>null]); 
           }
           $productids = $wishlist->productids;
           $productidsArr = explode(',',$productids);
           return view('shop.product',['products' => $products,'productidsArr'=>$productidsArr]);
       }
       else
       {
           return view('shop.product',['products' => $products]);
       }
    } 
    
     
    }
   
}
