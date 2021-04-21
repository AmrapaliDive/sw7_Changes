<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\User;
use App\Franchisee;
use App\Document;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;


class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
            {
                $franchisees = Franchisee::all();
                return view('admin.franchiseelist', ['franchisees' => $franchisees]);
            }
            else
            {
                return redirect('/');
            }
        }
        
    public function dealer_product(Request $request,$id)
    {
        $dealer = Franchisee::where('id',$id)->first();
        
        $products = Product::where('dealer_id',$id)->get();
        //return $products;
        return view('admin.productlist',['products'=>$products,'dealer'=>$dealer]);
    }

    public function dealer_doc(Request $request,$id)
    {
        $dealer = Franchisee::where('id',$id)->first();
        $userid = $dealer->user_id; 
        $user = User::where('id',$userid)->first();
        $document = Document::where('user_id',$userid)->first();
        //return $document;
        return view('admin.documents',['document'=>$document,'dealer'=>$dealer]);
    }

    public function updateDealerStatus(Request $request,$id)
    {
        $dealer = Franchisee::where('id',$id)->first();
        $status = $request->get('status');
        $userid = $dealer->user_id;
        $user = User::where('id',$userid)->first();
        $user->status = $status;
        $user->save();
        return redirect('/dealerlist')->with('success', 'update Dealer Status');
    }

    public function updateproduct(Request $request,$id)
    {
        return "hh";
        $product = Product::where('id',$id)->first();
        $product->approved = $request->get('approved');
        $product->save();
        return redirect('/dealerlist');
    }
    
    }