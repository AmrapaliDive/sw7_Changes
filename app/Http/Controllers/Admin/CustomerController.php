<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\User;
use App\Customer;
use App\Document;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;


class CustomerController extends Controller
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
                $customers = Customer::all();
                return view('admin.customerlist', ['customers' => $customers]);
            }
            else
            {
                return redirect('/');
            }
        }
        
    public function dealer_product(Request $request,$id)
    {
        $dealer = Dealer::where('id',$id)->first();
        
        $products = Product::where('dealer_id',$id)->get();
        //return $products;
        return view('admin.productlist',['products'=>$products,'dealer'=>$dealer]);
    }

    public function dealer_doc(Request $request,$id)
    {
        $dealer = Dealer::where('id',$id)->first();
        $userid = $dealer->user_id; 
        $user = User::where('id',$userid)->first();
        $document = Document::where('user_id',$id)->first();
        //return $document;
        return view('admin.documents',['document'=>$document,'dealer'=>$dealer]);
    }

    public function updateDealerStatus(Request $request,$id)
    {
        $dealer = Dealer::where('id',$id)->first();
        $status = $request->get('status');
        $userid = $dealer->id;
        $user = User::where('id',$userid)->first();
        $user->status = $status;
        $user->save();
        return redirect('/dealerlist')->with('success', 'update Dealer Status');
    }

    public function delete_customer(Request $request,$id)
    {
       $customer = Customer::where('id',$id)->first();
       $order = Order::where('user_id',Auth::user()->id)->first();
       if($order == null)  
       {
         $email = $customer->email;
         $customer->delete();
         $user = User::where('email',$email)->first();
         $user->delete();
         return redirect('/customerlist')->with('success','Customer Deleted Successfully !!');
       }
       else
       {
        return redirect('/customerlist')->with('danger','Customer Can not be Deleted !!');
       }
    }
    
    }