<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\User;
use App\Admission;
use App\Franchisee;
use App\Document;
use App\Account;
use App\Batch;
use Maatwebsite\Excel\Facades\Excel;
use Hash;
use Auth;
use File;
use Mail;
use Carbon\Carbon;

class FranchiseeController extends Controller
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

        public function index2()
        {
            if(Auth::check() && (Auth::user()->role == "admin"))
                {
                    $franchisees = Franchisee::all();
                    return view('admin.franchisee3', ['franchisees' => $franchisees]);
                }
                else
                {
                    return redirect('/');
                }
            }
    
        public function franchisee_addresses()
        {
            if(Auth::check() && (Auth::user()->role == "admin"))
                {
                    $franchisees = Franchisee::all();
                    return view('admin.franchisee2', ['franchisees' => $franchisees,'total'=>null,'start_date'=>null,'end_date'=>null]);
                }
                else
                {
                    return redirect('/');
                }
            }
     public function edit_franchisee(Request $request,$id)
     {
         $franchisee = Franchisee::find($id);
         //return $franchisee;
         return view('admin.franchisee_edit',['franchisee'=>$franchisee]);
     }

     public function update_franchisee(Request $request)
     {
         
              $id = $request->get('id');
             //return $id;
             $franchisee = Franchisee::where('id', $id)->first();
             //return $franchisee;			
                 if(empty($franchisee))
                     return redirect('/')->with('danger', 'Franchisee not found');
                 //return $franchisee;
                 $franchisee->first_name = $request->input('first_name');
                 $franchisee->last_name = $request->input('last_name');
                 $franchisee->email = $request->input('email');
                 $franchisee->contact1 = $request->input('contact_no1');
                 $franchisee->contact2 = $request->input('contact_no2');

                                 
                 $franchisee->dob = $request->input('dob');
                 $franchisee->address = $request->input('address');
                 $franchisee->landmark = $request->input('landmark');
                 $franchisee->city = $request->input('city');
                 $franchisee->pincode = $request->input('pincode');
                 $franchisee->landline_no = $request->input('landline_no');

                 $franchisee->contact_person = $request->input('contact_person');
                 $franchisee->contact_person_contact = $request->input('contact_person_contact');
                 $franchisee->office_time = $request->input('office_time');
                 $franchisee->description = $request->input('description');

                 
                 $image_path=$franchisee->profile_image;
                 if($request->hasFile('image'))
                 {
                     if($image_path!="")
                     {
                    // unlink(public_path() . "".$image_path );
                     }
                 $file1 = $request->file('image');		
                 $filename1 = md5_file($file1->path()).'.'.$file1->getClientOriginalExtension();
                 $file1->move(base_path().'/public/images/storage/franchisees/', $filename1);
                 $franchisee->profile_image = '/images/storage/franchisees/'.$filename1;
                     
                 }

                 
                 
                
                 $franchisee->save();
         
                     
                 return redirect('/franchiseelist')->with('success', 'Franchise has been successfully Updated');
         
     
     }
            
    public function franchisee_batches(Request $request,$id)
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
        {
        $franchisee = Franchisee::where('id',$id)->first();
        
        $batches = Batch::where('user_id',$id)->get();
        //return $products;
        return view('admin.batches',['batches'=>$batches,'franchisee'=>$franchisee]);
        }
        else
            {
                return redirect('/');
            }
    }

    public function update_batch_status(Request $request,$id)
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
        {
        $batch = Batch::where('id',$id)->first();
        $userid = $batch->user_id;
        
        $franchisee = Franchisee::where('user_id',$userid)->first();
        //return $franchisee;
        $batch->status = $request->get('status');
        $batch->save();

        $name = $franchisee->first_name . " ".$franchisee->last_name;
        $cnumber=  $franchisee->contact1;
        $email = $franchisee->email;
        $data = array('batch'=>$batch,'name'=>$name,'email'=>$email,'cnumber'=>$cnumber);
       

        
        Mail::send('batchstatusmail', $data, function($message) use($email,$name) {
            $message->to($email, $name)->subject
            ('SW7 INFOMEDIA PRIVATE LIMITED Batch Status');
            $message->from('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED');

        });
        return redirect()->back();
        
        }
        else
        {
            return redirect('/');
        }
    }

    public function franchisee_doc(Request $request,$id)
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
        {
        $franchisee = Franchisee::where('id',$id)->first();
        $userid = $franchisee->user_id; 
        $user = User::where('id',$userid)->first();
        $document = Document::where('user_id',$userid)->first();
        $account = Account::where('user_id',$userid)->first();
        //return $document;
        return view('admin.documents',['document'=>$document,'franchisee'=>$franchisee,'account'=>$account]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function update_franchisee_status(Request $request,$id)
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
        {
        $franchisee = Franchisee::where('id',$id)->first();
        $status = $request->get('status');
        $userid = $franchisee->user_id;
        $user = User::where('id',$userid)->first();
        $user->status = $status;
        $user->save();

        $email= $user->email;
        $status = $user->status;
       
        $name = $franchisee->first_name . " ".$franchisee->last_name;
        $cnumber=  $franchisee->contact1;
        $data = array('status'=>$status,'name'=>$name,'email'=>$email,'cnumber'=>$cnumber);
       

        
        Mail::send('statusmail', $data, function($message) use($email,$name) {
            $message->to($email, $name)->subject
            ('SW7 Account Status');
            $message->from('sales@sw7infomedia.com', 'SW7 INFOMEDIA PRIVATE LIMITED');

        });
        return redirect('franchiseelist')->with('success', 'Updated Franchisee Status Successfully!!');
        }
        else
        {
            return redirect('/');
        }
    }

    public function updateproduct(Request $request,$id)
    {
        return "hh";
        $product = Product::where('id',$id)->first();
        $product->approved = $request->get('approved');
        $product->save();
        return redirect('franchiseelist');
    }

    public function batch_edit($id)
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
        {
            $batch = Batch::find($id);
            //return $batch;
            return view('admin.edit_batch',['batch'=>$batch]);

        }
        else
        {
            return redirect('/');
        }
    }

    public function batch_update(Request $request, $id)
    {
        if(Auth::check() && (Auth::user()->role == "admin"))
        {
        
            $batch = Batch::find($id);
            if(empty($batch))
            {
               return redirect('/franchiseelist')->with('danger', 'Batch not found');
            }
            else 
            {
            //$userid = Auth::user()->id;
                      
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
                //    unlink(public_path() . "/images/storage/batches/".$image_path4 );
                    }
                    $file1 = $request->file('batch_image3');
                    $filename = md5_file($file1).'.'.$file1->getClientOriginalExtension();
                    $file1->move(base_path().'/public/images/storage/batches/', $filename);
                    $batch->batch_image3 = ''.$filename;
                    
                }

                //$batch->user_id = $userid;
                $batch->save();
               // return redirect()->back()->with('success', 'Batch has been successfully Updated');
                return redirect('/admin/franchisee_batches/'.$batch->user_id)->with('success', 'Batch has been successfully Updated');
            }
        }
        else
        {
            return redirect('/')->withErrors(['Error', 'Your Profile Is Not Approved Yet']);
        }
    }

       public function dealerRecords(Request $request)
       {
        $start_date = $request->get('start_date');
        $end_date1 = $end_date = $request->get('end_date');
        $end_date = Carbon::parse($end_date)->addDays(1);
        //return $end_date;    
        
        $franchisees = Franchisee::where('created_at','>=',$start_date)->where('created_at','<=',$end_date)->get();
        $count = $franchisees->count();
        $sum = Franchisee::where('created_at','>=',$start_date)->where('created_at','<=',$end_date)->get()->sum('remark1');
        //return $sum;   
        $total = 0; $gst_total = 0; 
        // foreach($franchisees as $franchisee)
        // {
        //     if($franchisee->remark1 ==70800)
        //     {
        //         $gst_total = $gst_total + 10800;
        //     }
        //     $total = $total + $franchisee->remark1;
        // }
        //return $gst_total;
        $start_date = new Carbon($start_date);
        $end_date = new Carbon($end_date1);
        return view('admin.franchisee2', ['franchisees' => $franchisees,'total'=>null,'start_date'=>$start_date,'end_date'=>$end_date]);

       }

       public function delete_franchisee(Request $request,$id)
       {
           $franchisee = Franchisee::where('id',$id)->first();
           $admissions = Admission::where('franchisee_id',$franchisee->id)->first();
           // return $admissions;
           if($admissions == null)
           {
               $email = $franchisee->email;
               $franchisee->delete();
               $user = User::where('email',$email)->first();
               $document = Document::where('user_id',$user->id)->first();
               $account =Account::where('user_id',$user->id)->first();

               if($document!=null)
               {
                   $document->delete();
               } 

               if($account!=null)
               {
                   $account->delete();
               }
               $user->delete();
               return redirect('/franchiseelist')->with('success','Franchisee Deleted Successfully !!');
           }
           else
           {
            return redirect('/franchiseelist')->with('danger','Franchisee Can not be Deleted !!');
           }
       }
    
    }