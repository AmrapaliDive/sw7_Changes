<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Product;
use App\Order;
use App\Cart;
use Session;
use Auth;
use DB;

class FruitsController extends Controller
{
    public function getIndex(){
        $searchNutInput = "fruits";
        $products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orWhere ('subtype', 'LIKE', '%' .  $searchNutInput . '%')->paginate();		
       // $products = DB::table('products')->orderBy('id', 'DESC')->paginate(12);
        return view('shop.fruits',['products' => $products]);
    }
    public function getApple(){
        $searchNutInput = "apple";
        $products = Product::where( 'type', 'LIKE', '%'.$searchNutInput.'%')->orWhere ('subtype', 'LIKE', '%' .$searchNutInput. '%')->orWhere ('title', 'LIKE', '%' .  $searchNutInput . '%')->paginate();		
       // $products = DB::table('products')->orderBy('id', 'DESC')->paginate(12);
        return view('shop.fruits',['products' => $products]);
    }

    public function getOrganicfruits(){
        $searchNutInput = "organic";
        $products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orWhere ('subtype', 'LIKE', '%' .$searchNutInput. '%')->orWhere ('title', 'LIKE', '%' .  $searchNutInput . '%')->paginate();		
       // $products = DB::table('products')->orderBy('id', 'DESC')->paginate(12);
        return view('shop.fruits',['products' => $products]);
    }
  
    public function getSeasonalfruits(){
        $searchNutInput = "seasonal";
        $products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orWhere ('subtype', 'LIKE', '%' .$searchNutInput. '%')->orWhere ('title', 'LIKE', '%' .  $searchNutInput . '%')->paginate();		
       // $products = DB::table('products')->orderBy('id', 'DESC')->paginate(12);
        return view('shop.fruits',['products' => $products]);
    }


    public function getOther(){
        $searchNutInput = "other fruits";
        $products = Product::where( 'type', 'LIKE', '%' .  $searchNutInput . '%')->orWhere ('subtype', 'LIKE', '%' .$searchNutInput. '%')->orWhere ('title', 'LIKE', '%' .  $searchNutInput . '%')->paginate();		
       // $products = DB::table('products')->orderBy('id', 'DESC')->paginate(12);
        return view('shop.pulses-seeds',['products' => $products]);
    }

    public function getAddToCart(Request $request,$id,$qty,$gram,$amount) {
        
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id , $qty, $gram,$amount);
        $request->session()->put('cart', $cart);
        return response()->json(['product'=>$product,'cart'=>$cart]);
        }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart  = new Cart($oldCart);
        return view('shop.shopping-cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.check', ['total' => $total]);
    }

    public function postCheckout(Request $request) {
        if (!Session::has('cart')) {
            return redirect()->route('product.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_FqmN8OQbuxmJdDFsLYSaTWEp');
        try {
            $charges = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charges"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charges->id;

            Auth::user()->orders()->save($order);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');

        return redirect()->route('product.seeds')->with('success','Successfully purchased products!');
    }

    public function deductByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deductByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingcart');
    }

    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingcart');
    }
}
