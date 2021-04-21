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

class MobileController extends Controller
{
    public function all_new_mobiles(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->get();
        return view('shop.product',['products' => $products]);
    }

    public function oppo(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->where('subtype','oppo')->get();
        return view('shop.product',['products' => $products]);
    }
    public function samsung(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->where('subtype','samsung')->get();
        return view('shop.product',['products' => $products]);
    }

    public function iphone(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->where('subtype','iphone')->get();
        return view('shop.product',['products' => $products]);
    }

    public function redmi(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->where('subtype','redmi')->get();
        return view('shop.product',['products' => $products]);
    }

    public function itel(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->where('subtype','itel')->get();
        return view('shop.product',['products' => $products]);
    }
    public function vivo(Request $request)
    {
        $products = Product::where('type', 'Mobiles')->where('subtype','vivo')->get();
        return view('shop.product',['products' => $products]);
    }

    public function all_new_mobile_accessories(Request $request)
    {
        $products = Product::where('type', 'Mobile Accessories')->get();
        return view('shop.product',['products' => $products]);
    }
    public function gadgets(Request $request)
    {
        $products = Product::where('type', 'Mobile Accessories')->where('subtype','gadgets')->get();
        return view('shop.product',['products' => $products]);
    }
    public function headsets(Request $request)
    {
        $products = Product::where('type', 'Mobile Accessories')->where('subtype','Bluetooth-Headphone & Headsets')->get();
        return view('shop.product',['products' => $products]);
    }

}
