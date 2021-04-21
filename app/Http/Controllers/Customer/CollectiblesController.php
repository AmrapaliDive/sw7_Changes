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

class CollectiblesController extends Controller
{
    public function action_figure(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectible')->where( 'subtype', 'Action Figure')->get();
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

    public function coins(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Coins & Paper Money')->get();
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

    public function stamps(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Stamps')->get();
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
    public function postcards(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Collectible Postcards')->get();
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
    public function memorabilia(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Entertainment Memorabilia')->get();
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

    public function antiques(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Antiques')->get();
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

    public function writing_instruments(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Collectible Pens & Writing Instruments')->get();
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
    public function character_toys(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'TV & Movie Character Toys')->get();
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
    public function toy_vehicles(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Diecast & Toy Vehicles')->get();
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
    public function comics(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Collectibles')->where( 'subtype', 'Collectible Comics')->get();
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
