<?php

namespace App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Dealer;
use App\Customer;
use App\website_setting;
use App\Order;
use App\Cart;
use App\Wishlist;
use Session;
use Mail;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ElectronicsController extends Controller
{
    public function cellPhones(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Cell Phones')->get();
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

    public function smartWatches(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Smart Watches')->get();
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

    public function videogames(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Video games')->get();
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
    public function computerNetwork(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Computer Network')->get();
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
    public function camera(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Camera')->get();
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

    public function headphones(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Headphones')->get();
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

    public function vehicleElectronics(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Vehicle Electronics')->get();
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

    public function homeElectronics(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'TV & Home Electronics')->get();
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
    public function cameraDrones(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Electronics')->where( 'subtype', 'Camera Drones')->get();
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
