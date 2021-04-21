<?php

namespace App\Http\Controllers;

use Auth;

use App\Map;

use App\Batch;
use App\Slider;

use App\Product;
use App\User;
use App\Franchisee;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{

    public function index()
    {
        return view('/');
    }


    public function home_page_browse(Request $request)
    {
        //$cities = Franchisee::groupBy('city')->get();
        $ids = Franchisee::select('user_id')->get()->pluck('user_id');

      // return $ids;
       $temp =array();$i=0;
        foreach($ids as $value)
        {   
          $user = User::where('id',$value)->first();
          if($user->status == "Accepted")
          {
                $temp[$i] = $user->id; 
          }
        }
        //return $temp;
        $i=0;$cities=array();
        foreach($temp as $user_id)
        {
            $cities[$i] = Franchisee::where('user_id',$user_id)->first();
            $i++;
        }
       
        $results = Slider::orderBy('created_at', 'desc')->paginate();
        $products = Product::all();
        $batches = Batch::all();
        $maps=Map::all();
        //return $products;
        return view('shop.homepage', ['results' => $results,'products' => $products,'batches' => $batches,'cities'=>$cities, 'maps'=>$maps]);
    }

    
}
