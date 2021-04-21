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

class MemoryController extends Controller
{
    public function memory_devices(Request $request)
    {
        $products = Product::where('type', 'Memory')->get();
        return view('shop.product',['products' => $products]);
    }
    
    public function ram(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','RAM')->get();
        return view('shop.product',['products' => $products]);
    }

    public function ssd(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','SSD')->get();
        return view('shop.product',['products' => $products]);
    }

    public function hd(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','HD')->get();
        return view('shop.product',['products' => $products]);
    }

    public function portable_hd(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Portable HD')->get();
        return view('shop.product',['products' => $products]);
    }

    public function pen_drive(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Pen Drive')->get();
        return view('shop.product',['products' => $products]);
    }

    public function routers_modems(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Routers & Modems')->get();
        return view('shop.product',['products' => $products]);
    }

    public function cpu_processors(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','CPU & Processors')->get();
        return view('shop.product',['products' => $products]);
    }

    public function graphics_cards(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Graphics Cards')->get();
        return view('shop.product',['products' => $products]);
    }

    public function webcam(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Webcam')->get();
        return view('shop.product',['products' => $products]);
    }

    public function keyboards(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Keyboards')->get();
        return view('shop.product',['products' => $products]);
    }

    public function mouse(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Mouse')->get();
        return view('shop.product',['products' => $products]);
    }

    public function other_Memory(Request $request)
    {
        $products = Product::where('type', 'Memory')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }

}
