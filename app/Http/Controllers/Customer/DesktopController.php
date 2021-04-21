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

class DesktopController extends Controller
{
    public function all_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->get();
        return view('shop.product',['products' => $products]);
    }

    public function dell_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Dell')->get();
        return view('shop.product',['products' => $products]);
    }

    public function hp_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Hp')->get();
        return view('shop.product',['products' => $products]);
    }

    public function lenovo_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Lenovo')->get();
        return view('shop.product',['products' => $products]);
    }

    public function toshiba_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Toshiba')->get();
        return view('shop.product',['products' => $products]);
    }

    public function acer_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Acer')->get();
        return view('shop.product',['products' => $products]);
    }

    public function asus_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Asus')->get();
        return view('shop.product',['products' => $products]);
    }

    public function others_new_desktop(Request $request)
    {
        $products = Product::where('type', 'Desktop')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }

    public function dell_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Dell')->get();
        return view('shop.product',['products' => $products]);
    }

    public function all_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->get();
        return view('shop.product',['products' => $products]);
    }

    public function hp_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Hp')->get();
        return view('shop.product',['products' => $products]);
    }

    public function lenovo_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Lenovo')->get();
        return view('shop.product',['products' => $products]);
    }

    public function toshiba_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Toshiba')->get();
        return view('shop.product',['products' => $products]);
    }

    public function acer_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Acer')->get();
        return view('shop.product',['products' => $products]);
    }

    public function asus_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Asus')->get();
        return view('shop.product',['products' => $products]);
    }

    public function others_refurbished_desktop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Desktop')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }
    
}
