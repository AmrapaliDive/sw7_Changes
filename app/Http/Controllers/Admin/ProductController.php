<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\User;
use App\Dealer;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.productform');
        }
        
    

    public function insert(Request $request)
    {		
    
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
         {
			$user = Auth::user();
            $product = new Product();
            $product->product_name =  $request->input('product_name');
             //return $product->marathi_title;
            $product->type= $request->input('type');
            //return $request->input('subtype');
            if($request->input('subtype')=="Select sub type")
                    $product->subtype= null;
            else
                    $product->subtype= $request->input('subtype');
                    $product->stock= $request->input('stock');
            $product->mrp= $request->input('mrp');   
            $product->gst= $request->input('gst'); 
            $product->discount= $request->input('discount');   
            $product->price= $request->input('price');            
            $product->description= $request->input('summernote');
            if($request->input('video'))
            {
                $product->video= $request->input('video');
            }
            else
            {
                $product->video = '';
            }
            $product->remark1= "available";


            
            if($request->file('imagefile1'))
            {
            $file1 = $request->file('imagefile1');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/products/', $filename);
             $product->path = ''.$filename;
            }
            else
            {
                $product->path ="NA";
            }

            if($request->file('imagefile2'))
            {
            $file1 = $request->file('imagefile2');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/products/', $filename);
             $product->path2 = ''.$filename;
            }
            else
            {
                $product->path2 ="NA";
            }
            
            if($request->file('imagefile3'))
            {
            $file1 = $request->file('imagefile3');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/products/', $filename);
             $product->path3 = ''.$filename;
            }
            else
            {
                $product->path3 ="NA";
            }

            if($request->file('imagefile4'))
            {
             $file1 = $request->file('imagefile4');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/products/', $filename);
             $product->path4 = ''.$filename;
            }
            else
            {
                $product->path4 ="NA";
            }
           
            $product->save();
            return redirect('/productlist')->with('success', 'Product has been successfully created');
            }
            else
            {
                return redirect('/admin');
            }

    }
     
    public function productlist()
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
            $products = Product::all();
            return view('admin.productlist', ['products' => $products]);
        }
        else
        {
            return redirect('/');
        }
       
    }

    public function orderlist()
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
            $order = Order::all();
            $ordercount = Order::count();
            $usercount = User::count();
            $order->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            return view('admin.orderlist', ['order' => $order,'ordercount'=>$ordercount,'usercount'=>$usercount]);
        }
        else
        {
            return redirect('/');
        }
       
    }
   
    public function orderdelete($id)
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
		 	$order = Order::find($id);
         
                 $order->delete();  
         

         return redirect('/orderlist')->with('success', 'order has been successfully Deleted');
                 }
                 else
                 {
                     return redirect('/');
                 }


    }




    public function delete($id)
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
		 	$product = Product::find($id);
             $image_path=$product->path;	
             $image_path1=$product->path2;
             $image_path2=$product->path3;
	
		 		if($image_path)
		 		{
		 		 // unlink(public_path() ."/images/products/".$image_path );
                }
                $product->delete();  
                return redirect('/productlist')->with('success', 'product has been successfully Deleted');
                 }
                 else
                 {
                     return redirect('/');
                 }


    }
    


    public function edit($id)
    {
         if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
         {
            $product = Product::find($id);
            if(!empty($product))
            {
             return view('admin.productform', ['products' => $product]);
            }
            else{
                
                    return redirect('/productlist');
                }
            }
            else
            {
                return redirect('/');
                
            }
    }


    public function update(Request $request, $id)
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
        
            $product = Product::find($id);
            //return $product;
            if(empty($product))
           {return redirect('/productlist')->with('danger', 'Product not found');}
            else {
                $product->product_name = $request->input('product_name');
               // return $product->marathi_title;
                $product->type = $request->input('type');
                $product->subtype = $request->input('subtype');
                $product->stock = $request->input('stock');
                
                $product->mrp= $request->input('mrp');  
                $product->gst= $request->input('gst');  
                $product->discount= $request->input('discount');   
                $product->price = $request->input('price');
                $product->description = $request->input('summernote');
                if($request->input('video'))
                    {
                        $product->video= $request->input('video');
                    }
                else
                    {
                        $product->video = '';
                    }
                $product->remark1= "available";
                $image_path=$product->path;	
                //return $image_path;
                $image_path2=$product->path2;
                $image_path3=$product->path3;
                $image_path4=$product->path4;
                if($request->hasFile('imagefile1'))
                {
                    if($image_path!="NA")
                    {
                   //unlink(public_path() . "/images/products/".$image_path );
                    }
                    $file1 = $request->file('imagefile1');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/products', $filename);
                    $product->path = ''.$filename;
                    
                }
                if($request->hasFile('imagefile2'))
                {
                    if($image_path2!="NA")
                    {
                    //unlink(public_path() . "/images/products/".$image_path2 );
                    }
                    $file1 = $request->file('imagefile2');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/products', $filename);
                    $product->path2 = ''.$filename;
                    
                }
                if($request->hasFile('imagefile3'))
                {
                    if($image_path3!="NA")
                    {
                   // unlink(public_path() . "/images/products/".$image_path3 );
                    }
                    $file1 = $request->file('imagefile3');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/products', $filename);
                    $product->path3 = ''.$filename;
                    
                }
                if($request->hasFile('imagefile4'))
                {
                    if($image_path4!="NA")
                    {
                    //unlink(public_path() . "/images/products/".$image_path4 );
                    }
                    $file1 = $request->file('imagefile4');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/products', $filename);
                    $product->path4 = ''.$filename;
                    
                }
                $product->save();
                return redirect('/productlist')->with('success', 'product has been successfully Updated');
            }
        }
        else
        {
            return redirect('/admin');
        }
    }

    public function import(Request $request)
    {
            if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
            if($request->file('imported-file'))
            {
                    $path = $request->file('imported-file')->getRealPath();
                    $data = Excel::load($path, function($reader) {
                })->get();
    
            if(!empty($data) && $data->count())
                {
                    $data = $data->toArray();
                    for($i=0;$i<count($data);$i++)
                    {
                    $dataImported[] = $data[$i];
                    }
                }
            Product::insert($dataImported);
            }
            return back();
        }
        else
        {
            return redirect('/');
        }
    }

    public function stock($id)
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
		 	$product = Product::find($id);
             $product->remark1="unavailable";	
             $product->save();
         return redirect('/productlist')->with('success', 'product has been successfully updated');
        }
        else
        {
            return redirect('/');
        }    
                 

    }
    
    public function stockAvailable($id)
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
		 	$product = Product::find($id);
             $product->remark1="available";	
             $product->save();
         return redirect('/productlist')->with('success', 'product has been successfully updated');
        }
        else
        {
            return redirect('/');
        }    
                 

    }

    public function editprices()
    {
        if(Auth::check() && (Auth::user()->email=="admin@gmail.com"))
        {
            $product = Product::all();
            return view('admin.updateproductlist', ['product' => $product]);
        }
        else
        {
            return redirect('/');
        }    
                 

    }
}
