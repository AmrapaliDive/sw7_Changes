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

class AccessoriesController extends Controller
{
    public function all_accessories(Request $request)
    {
        $products = Product::where('type', 'Accessories')->get();
        return view('shop.product',['products' => $products]);
    }
    
    public function gaming(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Gaming')->get();
        return view('shop.product',['products' => $products]);
    }

    public function adapters(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Adapters')->get();
        return view('shop.product',['products' => $products]);
    }

    public function batteries_accessories(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Batteries')->get();
        return view('shop.product',['products' => $products]);
    }

    public function cooling_pads(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Cooling Pads')->get();
        return view('shop.product',['products' => $products]);
    }

    public function headphones(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Headphones')->get();
        return view('shop.product',['products' => $products]);
    }

    public function routers_modems(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Routers & Modems')->get();
        return view('shop.product',['products' => $products]);
    }

    public function cpu_processors(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','CPU & Processors')->get();
        return view('shop.product',['products' => $products]);
    }

    public function graphics_cards(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Graphics Cards')->get();
        return view('shop.product',['products' => $products]);
    }

    public function webcam(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Webcam')->get();
        return view('shop.product',['products' => $products]);
    }

    public function keyboards(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Keyboards')->get();
        return view('shop.product',['products' => $products]);
    }

    public function mouse(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Mouse')->get();
        return view('shop.product',['products' => $products]);
    }

    public function other_accessories(Request $request)
    {
        $products = Product::where('type', 'Accessories')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }

}
