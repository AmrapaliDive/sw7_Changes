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

class FurnitureController extends Controller
{
    public function beds(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Beds & Mattresses')->get();
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

    public function tables(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Tables')->get();
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

    public function chairs(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Chairs')->get();
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
    public function sofa(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Sofas, Armchairs & Couches')->get();
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
    public function desk(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Home Office Desk')->get();
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

    public function slipcovers(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Slipcovers')->get();
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

    public function bookcases(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Bookcases & Shelving')->get();
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
    public function diningsets(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Dining Sets')->get();
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

    public function benches(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Benches, Stools & Bar Stools')->get();
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

    public function tvStands(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'TV Stands & Entertainment Units')->get();
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

    public function cupboards(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Cabinets & Cupboards')->get();
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

    public function furnitureParts(Request $request)
    {
        $products = Product::where( 'approved','yes')->where( 'type', 'Furniture')->where( 'subtype', 'Furniture Parts')->get();
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
