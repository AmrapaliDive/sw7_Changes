<?php

namespace App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Dealer;
use App\Customer;
use App\website_setting;
use App\Wishlist;
use App\Order;
use App\Cart;
use Session;
use Mail;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeGardenController extends Controller
{
    public function tools(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Tools')->get();
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

    public function garden(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Garden')->get();
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

    public function HomeImprovement(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Home Improvement')->get();
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
    public function kitchen(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Kitchen')->get();
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
    public function lamps(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Lamps, Lighting & Ceiling Fans')->get();
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

    public function HomeDecor(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Home Decor')->get();
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

    public function HomeOrganization(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Home Organization Supplies')->get();
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
    public function JewelryMaking(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Beads & Jewelry Making Supplies')->get();
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

    public function Scrapbooking(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Scrapbooking & Paper Craft Supplies')->get();
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

    public function PetSupplies(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Home & Garden')->where( 'subtype', 'Pet Supplies')->get();
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
