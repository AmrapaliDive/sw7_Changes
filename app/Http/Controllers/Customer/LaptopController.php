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

class LaptopController extends Controller
{
    public function all_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->get();
        return view('shop.product',['products' => $products]);
    }
    public function dell_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Dell')->get();
        return view('shop.product',['products' => $products]);
    }

    public function hp_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Hp')->get();
        return view('shop.product',['products' => $products]);
    }

    public function lenovo_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Lenovo')->get();
        return view('shop.product',['products' => $products]);
    }

    public function toshiba_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Toshiba')->get();
        return view('shop.product',['products' => $products]);
    }

    public function acer_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Acer')->get();
        return view('shop.product',['products' => $products]);
    }

    public function asus_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Asus')->get();
        return view('shop.product',['products' => $products]);
    }

    public function others_new_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_dell_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Dell')->get();
        return view('shop.product',['products' => $products]);
    }

    public function all_refurbished_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_hp_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Hp')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_lenovo_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Lenovo')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_toshiba_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Toshiba')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_acer_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Acer')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_asus_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Asus')->get();
        return view('shop.product',['products' => $products]);
    }

    public function refurbished_others_laptop(Request $request)
    {
        $products = Product::where('type', 'Refurbished Laptop')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_Screen(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Screen')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_keyboard(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Keyboard')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_hinges(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Hinges')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_body(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Body')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_wificard(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Wifi Card')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_dvd_rw(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','DVD RW')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_charger(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Charger')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_bios_battery(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Bios Battery')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_cables(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Cables')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_dc_jack(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Dc Jack')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_hitsing(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Hitsing')->get();
        return view('shop.product',['products' => $products]);
    }
    
    public function laptop_hitting_pest(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Hitting Pest')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_touchpad(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Touchpad')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_speaker(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Speaker')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_battery(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Battery')->get();
        return view('shop.product',['products' => $products]);
    }

    public function laptop_other_peripheral(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->where('subtype','Others')->get();
        return view('shop.product',['products' => $products]);
    }

    public function all_laptop_peripheral_laptop(Request $request)
    {
        $products = Product::where('type', 'Laptop Peripheral Parts')->get();
        return view('shop.product',['products' => $products]);
    }

    public function repairing_tools(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->get();
        return view('shop.product',['products' => $products]);
    }

    public function smd_machine(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','SMD Machine')->get();
        return view('shop.product',['products' => $products]);
    }

    public function soldering_gun(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Soldering Gun')->get();
        return view('shop.product',['products' => $products]);
    }

    public function disordering_pump(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Disordering Pump')->get();
        return view('shop.product',['products' => $products]);
    }

    public function twisers(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Twisers')->get();
        return view('shop.product',['products' => $products]);
    }

    public function cutter(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Cutter')->get();
        return view('shop.product',['products' => $products]);
    }

    public function soldering_pest(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Soldering Pest')->get();
        return view('shop.product',['products' => $products]);
    }

    public function desoldring_wire(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Desoldring Wire')->get();
        return view('shop.product',['products' => $products]);
    }

    public function opener(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Opener')->get();
        return view('shop.product',['products' => $products]);
    }

    public function magnify_lamp(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Magnify Lamp')->get();
        return view('shop.product',['products' => $products]);
    }

    public function microscope(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Microscope')->get();
        return view('shop.product',['products' => $products]);
    }

    public function bios_programmer(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Bios Programmer')->get();
        return view('shop.product',['products' => $products]);
    }

    public function tool_kit(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Tool kit')->get();
        return view('shop.product',['products' => $products]);
    }

    public function smd_tester(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','SMD Tester')->get();
        return view('shop.product',['products' => $products]);
    }

    public function dc_power_supply(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','DC Power Supply')->get();
        return view('shop.product',['products' => $products]);
    }

    public function booster(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','Booster')->get();
        return view('shop.product',['products' => $products]);
    }

    public function LED_Backlight_Tester(Request $request)
    {
        $products = Product::where('type', 'Repairing Tools')->where('subtype','LED Backlight Tester')->get();
        return view('shop.product',['products' => $products]);
    }
    
    public function ics(Request $request)
    {
        $products = Product::where('type', 'ICS')->get();
        return view('shop.product',['products' => $products]);
    }

    public function Components(Request $request)
    {
        $products = Product::where('type', 'Components')->get();
        return view('shop.product',['products' => $products]);
    }
}
