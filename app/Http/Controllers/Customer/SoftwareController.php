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

class SoftwareController extends Controller
{
    public function softwares(Request $request)
    {
        $products = Product::where('type', 'Software')->get();
        return view('shop.product',['products' => $products]);
    }

    public function windows_10(Request $request)
    {
        $products = Product::where('type', 'Software')->where('subtype','Windows 10')->get();
        return view('shop.product',['products' => $products]);
    }

    public function npav(Request $request)
    {
        $products = Product::where('type', 'Software')->where('subtype','NPAV Antivirus')->get();
        return view('shop.product',['products' => $products]);
    }

    public function quickheal(Request $request)
    {
        $products = Product::where('type', 'Software')->where('subtype','Quickheal Antivirus')->get();
        return view('shop.product',['products' => $products]);
    }

    public function other_software(Request $request)
    {
        $products = Product::where('type', 'Software')->where('subtype','Other Software')->get();
        return view('shop.product',['products' => $products]);
    }
}
