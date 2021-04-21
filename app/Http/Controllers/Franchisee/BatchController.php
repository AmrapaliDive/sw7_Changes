<?php

namespace App\Http\Controllers\Franchisee;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Batch;
use App\Admission;
use App\User;
use App\Franchisee;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;
use Mail;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
         {
            $userid = Auth::user()->id;
            return view('franchisee.batchform',['userid'=>$userid]);
         }
         else
         {
             return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
         }
 
        }
        
    

    public function insert(Request $request)
    {		
    
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
         {
            $userid = Auth::user()->id;
            $franchisee = Franchisee::where('user_id',$userid)->first();
            //return $franchisee;

            $batch = new Batch();
            $batch->batch_name =  $request->input('batch_name');
            $batch->teacher_name =  $request->input('teacher_name');
            $batch->timetable= $request->input('timetable');
            $batch->timeslot= $request->input('timeslot');
            $batch->syllabus = $request->input('syllabus');
            $batch->fee= $request->input('fee');   
            $batch->gst= $request->input('gst');   
            $batch->discount= $request->input('discount');             
            $batch->course_final_fee = $request->input('course_final_fee');            
            $batch->description= $request->input('summernote');
            
            $batch->course_duration= $request->input('course_duration');
            $batch->seats_available= $request->input('seats_available');
            $batch->status= "Pending";
            if($request->file('syllabus_pdf'))
            {
             $file1 = $request->file('syllabus_pdf');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/batches/', $filename);
             $batch->syllabus_pdf = ''.$filename;
            }

            else
            {
                $batch->syllabus_pdf ="NA";
            }
          
            if($request->file('course_image'))
            {
            $file1 = $request->file('course_image');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/batches/', $filename);
             $batch->course_image = ''.$filename;
            }

            else
            {
                $batch->course_image ="NA";
            }

            if($request->file('batch_image1'))
            {
             $file1 = $request->file('batch_image1');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/batches/', $filename);
             $batch->batch_image1 = ''.$filename;
            }

            else
            {
                $batch->batch_image1 ="NA";
            }

            if($request->file('batch_image2'))
            {
             $file1 = $request->file('batch_image2');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/batches/', $filename);
             $batch->batch_image2 = ''.$filename;
            }

            else
            {
              $batch->batch_image2 ="NA";
            }

            if($request->file('batch_image3'))
            {
             $file1 = $request->file('batch_image3');
             $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
             $file1->move(base_path().'/public/images/storage/batches/', $filename);
             $batch->batch_image3 = ''.$filename;
            }

            else
            {
              $batch->batch_image3 ="NA";
            }

            

            $batch->user_id = $userid;
            $batch->save();

            //batch mail to admin
            $email = $request->input('email');
            $password = $request->input('password');
            //$name = $request->input('first_name') . " ".$request->input('last_name');

              
            $data = array('name'=>$franchisee->first_name ." ".$franchisee->last_name,'batch'=>$batch);
                Mail::send('mail13', $data, function($message)  {
                $message->to('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED')->subject
                ('New Batch Registration Notification');
                $message->from('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED');

                });
            return redirect('/franchisee/batches/')->with('success', 'Batch has been successfully created');
            }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }

    }
     
    public function batchlist()
    {
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
        {
            $batches = Batch::where('user_id',Auth::user()->id)->get();
            return view('franchisee.batchlist', ['batches' => $batches]);
        }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
       
    }

    public function orderlist()
    {
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
        {
            $order = Order::all();
            $ordercount = Order::count();
            $usercount = User::count();
            $order->transform(function ($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
                
            });
            return view('franchisee.orderlist', ['order' => $order,'ordercount'=>$ordercount,'usercount'=>$usercount]);
        }
        else
        {
            return redirect('/'); return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
       
    }
   
    public function orderdelete($id)
    {
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
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
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
        {
		 	$batch = Batch::find($id);
             $image_path1=$batch->course_image;	
             $image_path2=$batch->batch_image1;
             $image_path3=$batch->batch_image2;
             $image_path4=$batch->batch_image3;
             $image_path5=$batch->syllabus_pdf;

		 		if($image_path1!="NA")
		 		{
		 		//  unlink(public_path() ."/images/storage/batches/".$image_path1 );
                }
                if($image_path2!="NA")
		 		{
		 		//  unlink(public_path() ."/images/storage/batches/".$image_path2 );
                }
                if($image_path3!="NA")
		 		{
		 		 // unlink(public_path() ."/images/storage/batches/".$image_path3 );
                }
                if($image_path4!="NA")
		 		{
		 		//  unlink(public_path() ."/images/storage/batches/".$image_path4 );
                }
                if($image_path5!="NA")
                {
               //   unlink(public_path() ."/images/storage/batches/".$image_path5 );
               }
               
                $batch->delete();  
                return redirect('/franchisee/batches/')->with('success', 'product has been successfully Deleted');
                 }
                 else
                 {
                    return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
                 }


    }
    


    public function edit($id)
    {
         if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
         {
            $batch = Batch::find($id);
           
            if(!empty($batch))
            {
                $userid = Auth::user()->id;
               return view('franchisee.batchform', ['batch' => $batch,'userid'=>$userid]);
            }
            else{
                
                    return redirect('/franchisee/batches/')->with('danger','product not found.');
                }
            }
            else
            {
                return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
            }
    }


    public function update(Request $request, $id)
    {
        if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
        {
        
            $batch = Batch::find($id);
            if(empty($batch))
            {
               return redirect('/franchisee/batches/')->with('danger', 'Batch not found');
            }
            else 
            {
            $userid = Auth::user()->id;
                      
            $batch->batch_name =  $request->input('batch_name');
            $batch->teacher_name =  $request->input('teacher_name');
            $batch->timetable= $request->input('timetable');
            $batch->timeslot= $request->input('timeslot');
            $batch->syllabus = $request->input('syllabus');
            $batch->fee= $request->input('fee');   
            $batch->gst= $request->input('gst');   
            $batch->discount= $request->input('discount');             
            $batch->course_final_fee = $request->input('course_final_fee');            
            $batch->description= $request->input('summernote');
            
            $batch->course_duration= $request->input('course_duration');
            $batch->seats_available= $request->input('seats_available');

            $image_path=$batch->course_image;
            $image_path2=$batch->batch_image1;
            $image_path3=$batch->batch_image2;
            $image_path4=$batch->batch_image3;
            $image_path5=$batch->syllabus_pdf;

                if($request->hasFile('syllabus_pdf'))
                {
                    if($image_path5!="NA")
                    {
                  //  unlink(public_path() . "/images/storage/batches/".$image_path5 );
                    }
                    $file1 = $request->file('syllabus_pdf');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/batches/', $filename);
                    $batch->syllabus_pdf = ''.$filename;
                    
                }

                if($request->hasFile('course_image'))
                {
                    if($image_path!="NA")
                    {
                   // unlink(public_path() . "/images/storage/batches/".$image_path );
                    }
                    $file1 = $request->file('course_image');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/batches/', $filename);
                    $batch->course_image = ''.$filename;
                    
                }

                if($request->hasFile('batch_image1'))
                {
                    if($image_path2!="NA")
                    {
                  //  unlink(public_path() . "/images/storage/batches/".$image_path2 );
                    }
                    $file1 = $request->file('batch_image1');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/batches/', $filename);
                    $batch->batch_image1 = ''.$filename;
                    
                }

                
                if($request->hasFile('batch_image2'))
                {
                    if($image_path3!="NA")
                    {
                  //  unlink(public_path() . "/images/storage/batches/".$image_path3 );
                    }
                    $file1 = $request->file('batch_image2');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/batches/', $filename);
                    $batch->batch_image2 = ''.$filename;
                    
                }

                if($request->hasFile('batch_image3'))
                {
                    if($image_path4!="NA")
                    {
                  //  unlink(public_path() . "/images/storage/batches/".$image_path4 );
                    }
                    $file1 = $request->file('batch_image3');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/batches/', $filename);
                    $batch->batch_image3 = ''.$filename;
                    
                }

                $batch->user_id = $userid;
                $batch->save();
                return redirect('/franchisee/batches/')->with('success', 'Batch has been successfully Updated');
            }
        }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
    }

    public function import(Request $request)
    {
            if(Auth::check() && (Auth::user()->role == "franchisee") && (Auth::user()->status == "Accepted"))
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
            Batch::insert($dataImported);
            }
            return back();
        }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
    }
}
