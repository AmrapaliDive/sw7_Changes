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

class PrinterController extends Controller
{
    public function all_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->get();
        return view('shop.product',['products' => $products]);
    }
    
    public function hp_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','HP')->get();
        return view('shop.product',['products' => $products]);
    }

    public function canon_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','Canon')->get();
        return view('shop.product',['products' => $products]);
    }

    public function xerox_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','Xerox')->get();
        return view('shop.product',['products' => $products]);
    }

    public function reco_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','Reco')->get();
        return view('shop.product',['products' => $products]);
    }

    public function lenovo_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','Lenovo')->get();
        return view('shop.product',['products' => $products]);
    }

    public function epson_printer(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','Epson')->get();
        return view('shop.product',['products' => $products]);
    }

    public function printer_peripheral(Request $request)
    {
        $products = Product::where('type', 'Printer')->where('subtype','Peripheral Parts')->get();
        return view('shop.product',['products' => $products]);
    }
}
