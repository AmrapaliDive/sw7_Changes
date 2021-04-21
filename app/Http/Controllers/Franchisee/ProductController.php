<?php

namespace App\Http\Controllers\Dealer;
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


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
         {
            $userid = Auth::user()->id;
            $dealer = Dealer::where('user_id',$userid)->first();
            return view('dealer.productform',['dealer'=>$dealer]);
         }
         else
         {
             return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
         }
 
        }
        
    

    public function insert(Request $request)
    {		
    
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
         {
            $userid = Auth::user()->id;
            $dealer = Dealer::where('user_id',$userid)->first();
            //return $dealer;
            $product = new Product();
            $product->product_name =  $request->input('product_name');
            $product->type= $request->input('type');
            $product->subtype= $request->input('subtype');
            $product->quantity = $request->input('quantity');
            $product->mrp= $request->input('mrp');   
            $product->discount= $request->input('discount');             
            $product->price= $request->input('price');            
            $product->description= $request->input('summernote');
            if($request->input('video'))
            {
                $product->video= $request->input('video');
            }
            else
            {
                $product->video= '';
            }
            $product->height= $request->input('height');
            $product->width= $request->input('width');
            $product->depth= $request->input('depth');
            $product->weight= $request->input('weight');
            $product->approved= 'no';
            if($request->file('imagefile1'))
            {
            $file1 = $request->file('imagefile1');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/products/', $filename);
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
             $file1->move(base_path().'/public/images/storage/products/', $filename);
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
             $file1->move(base_path().'/public/images/storage/products/', $filename);
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
             $file1->move(base_path().'/public/images/storage/products/', $filename);
             $product->path4 = ''.$filename;
            }

            else
            {
              $product->path4 ="NA";
            }

            if($request->file('imagefile5'))
            {
             $file1 = $request->file('imagefile5');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/products/', $filename);
             $product->path5 = ''.$filename;
            }

            else
            {
              $product->path5 ="NA";
            }

            if($request->file('imagefile6'))
            {
             $file1 = $request->file('imagefile6');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/products/', $filename);
             $product->path6 = ''.$filename;
            }

            else
            {
              $product->path6 ="NA";
            }

            if($request->file('imagefile7'))
            {
             $file1 = $request->file('imagefile7');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/products/', $filename);
             $product->path7 = ''.$filename;
            }

            else
            {
              $product->path7 ="NA";
            }

            if($request->file('imagefile8'))
            {
             $file1 = $request->file('imagefile8');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/products/', $filename);
             $product->path8 = ''.$filename;
            }

            else
            {
              $product->path8 ="NA";
            }

            $product->dealer_id = $dealer->id;
            $product->save();
            return redirect('/dealer/products')->with('success', 'Product has been successfully created');
            }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }

    }
     
    public function productlist()
    {
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
            $dealer = Dealer::where('user_id',Auth::user()->id)->first();
            $product = Product::where('dealer_id',$dealer->id)->get();
            return view('dealer.productlist', ['product' => $product]);
        }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
       
    }

    public function orderlist()
    {
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
            $order = Order::all();
            $ordercount = Order::count();
            $usercount = User::count();
            $order->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            return view('dealer.orderlist', ['order' => $order,'ordercount'=>$ordercount,'usercount'=>$usercount]);
        }
        else
        {
            return redirect('/'); return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
       
    }
   
    public function orderdelete($id)
    {
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
		 	$order = Order::find($id);
         
                 $order->delete();  
         

         return redirect('/orderlist')->with('success', 'order has been successfully Deleted');
                 }
                 else
                 {
                    return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
                 }


    }




    public function delete($id)
    {
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
		 	$product = Product::find($id);
             $image_path1=$product->path;	
             $image_path2=$product->path2;
             $image_path3=$product->path3;
             $image_path4=$product->path4;

             $image_path5=$product->path5;	
             $image_path6=$product->path6;
             $image_path7=$product->path7;
             $image_path8=$product->path8;
	
		 		if($image_path1!="NA")
		 		{
		 		  unlink(public_path() ."/images/storage/products/".$image_path1 );
                }
                if($image_path2!="NA")
		 		{
		 		  unlink(public_path() ."/images/storage/products/".$image_path2 );
                }
                if($image_path3!="NA")
		 		{
		 		  unlink(public_path() ."/images/storage/products/".$image_path3 );
                }
                if($image_path4!="NA")
		 		{
		 		  unlink(public_path() ."/images/storage/products/".$image_path4 );
                }
                if($image_path5!="NA")
                {
                  unlink(public_path() ."/images/storage/products/".$image_path5 );
                }
                if($image_path6!="NA")
                {
                  unlink(public_path() ."/images/storage/products/".$image_path6 );
                }
                if($image_path7!="NA")
                {
                  unlink(public_path() ."/images/storage/products/".$image_path7 );
                }
                if($image_path8!="NA")
                {
                  unlink(public_path() ."/images/storage/products/".$image_path8 );
                }
                $product->delete();  
                return redirect('/dealer/products')->with('success', 'product has been successfully Deleted');
                 }
                 else
                 {
                    return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
                 }


    }
    


    public function edit($id)
    {
         if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
         {
            $product = Product::find($id);
            if(!empty($product))
            {
                $userid = Auth::user()->id;
                $dealer = Dealer::where('user_id',$userid)->first();
                return view('dealer.productform', ['product' => $product,'dealer'=>$dealer]);
            }
            else{
                
                    return redirect('/dealer/products')->with('danger','product not found.');
                }
            }
            else
            {
                return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
            }
    }


    public function update(Request $request, $id)
    {
        if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
        {
        
            $product = Product::find($id);
            if(empty($product))
            {
               return redirect('/dealer/products')->with('danger', 'Product not found');
            }
            else 
            {
            $userid = Auth::user()->id;
            $dealer = Dealer::where('user_id',$userid)->first();
            
            $product->product_name =  $request->input('product_name');
            $product->type= $request->input('type');
            $product->subtype= $request->input('subtype');
            $product->quantity = $request->input('quantity');
            $product->mrp= $request->input('mrp');   
            $product->discount= $request->input('discount');             
            $product->price= $request->input('price');           
            $product->description= $request->input('summernote');
            $product->video= $request->input('video');
            $product->height= $request->input('height');
            $product->width= $request->input('width');
            $product->depth= $request->input('depth');
            $product->weight= $request->input('weight');
            $image_path=$product->path;
            $image_path2=$product->path2;
            $image_path3=$product->path3;
            $image_path4=$product->path4;

            $image_path5=$product->path5;
            $image_path6=$product->path6;
            $image_path7=$product->path7;
            $image_path8=$product->path8;
                if($request->hasFile('imagefile1'))
                {
                    if($image_path!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path );
                    }
                    $file1 = $request->file('imagefile1');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path = ''.$filename;
                    
                }

                if($request->hasFile('imagefile2'))
                {
                    if($image_path2!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path2 );
                    }
                    $file1 = $request->file('imagefile2');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path2 = ''.$filename;
                    
                }

                
                if($request->hasFile('imagefile3'))
                {
                    if($image_path3!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path3 );
                    }
                    $file1 = $request->file('imagefile3');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path3 = ''.$filename;
                    
                }

                if($request->hasFile('imagefile4'))
                {
                    if($image_path4!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path4 );
                    }
                    $file1 = $request->file('imagefile4');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path3 = ''.$filename;
                    
                }

                if($request->hasFile('imagefile5'))
                {
                    if($image_path5!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path5 );
                    }
                    $file1 = $request->file('imagefile5');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path5 = ''.$filename;
                    
                }

                if($request->hasFile('imagefile6'))
                {
                    if($image_path6!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path6 );
                    }
                    $file1 = $request->file('imagefile6');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path6 = ''.$filename;
                    
                }

                if($request->hasFile('imagefile7'))
                {
                    if($image_path7!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path7 );
                    }
                    $file1 = $request->file('imagefile7');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path7 = ''.$filename;
                    
                }

                if($request->hasFile('imagefile8'))
                {
                    if($image_path8!="NA")
                    {
                    unlink(public_path() . "/images/storage/products/".$image_path8 );
                    }
                    $file1 = $request->file('imagefile8');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/products/', $filename);
                    $product->path8 = ''.$filename;
                    
                }

                $product->dealer_id = $dealer->id;
                $product->save();
                return redirect('/dealer/products')->with('success', 'product has been successfully Updated');
            }
        }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
    }

    public function import(Request $request)
    {
            if(Auth::check() && (Auth::user()->role == "dealer") && (Auth::user()->status == "Accepted"))
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
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
    }
}
