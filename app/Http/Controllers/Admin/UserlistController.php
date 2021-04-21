<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Excel;
use Illuminate\Http\Request;
use App\Testseries;
use App\Package;
use App\User;
use App\Order;
use Carbon\Carbon;
use Hash;
use Auth;
use File;
use App\Rank;
use Mail;


class UserlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
        $users=User::orderBy('id', 'DESC')->get();
        return view('admin.userlist',['users' => $users] );
        }
        else
        {
          return redirect('/');
        }

    }
    public function analysis()
    {   
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
        $users=User::orderBy('id', 'DESC')->where('role', '!=','Admin')->get();
        
    //    return $users;
        $counters=array();
         $i=0;
        foreach ($users as $user) 
        {
          $id=$user->id;
           
        $orders =Order::where('user_id',$id)->where('created_at','>=',Carbon::now()->firstOfMonth()->toDateTimeString())->count();
        $orders1 =Order::where('user_id',$id)->where('created_at', '>', (new \Carbon\Carbon)->submonths(4) )->count();
        $orders2 =Order::where('user_id',$id)->where('created_at', '>', (new \Carbon\Carbon)->submonths(6) )->count();
        $orders3 =Order::where('user_id',$id)->where('created_at', '>', (new \Carbon\Carbon)->submonths(12) )->count();
        
    
        
        $counters[$i]=array();
        $counters[$i][0]=$orders;
        $counters[$i][1]=$orders1;
        $counters[$i][2]=$orders2;
        $counters[$i][3]=$orders3;
       
       
        $i++;
        
         
        }
         
    //   return $users;
       
        return view('admin.analysis',['users' => $users,'orders' => $orders,'counters'=>$counters] );
        }
        else
        {
          return redirect('/');
        }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //AJAY CRUD FOR USER//
    public function adduser()
    {
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
            return view('admin.adduser');
        }
        else
        {
            return redirect('/');
        }
    }


    public function store(Request $request){
        
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
            $user = new User();

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->cnumber = $request->input('cnumber');
            $user->uid = $request->input('uid');
            $user->status = $request->input('status');
            $user->role = $request->input('role');
            
            if($request->Hasfile('user_image'))
            {
                $file = $request->file('user_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/users/',$filename);
                $user->user_image = $filename;
            }else
            {
                
                $user->user_image = '';
            }

            if($request->Hasfile('idproof'))
            {
                $file = $request->file('idproof');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/idproof/',$filename);
                $user->idproof = $filename;
            }else
            {
                
                $user->idproof = '';
            }
            
            

            $user->rating = $request->input('rating');
            $user->remember_token = $request->input('remember_token');
            
            
            $user->save();           

            $user = User::all();
            return redirect('/userlist')->with('success', 'user has been successfully created');
        }
        else
        {
            return redirect('/');
        }
    }

    public function edituser($id)
    {

        $user = User::find($id);
        return view('admin.adduser')->with('user',$user);
    }


    public function updateuser(Request $request,$id)
    {
        if(Auth::check() && (Auth::user()->email == "admin@gmail.com"))
        {
            $user = User::find($id);
            $public_path1='/images/users/';
            $public_path2='/images/idproof/';


            $user->name = $request->input('name');
            $user->email = $request->input('email');
            //$user->password = bcrypt($request->input('password'));
            $user->cnumber = $request->input('cnumber');
            $user->uid = $request->input('uid');
            $user->status = $request->input('status');
            $user->role = $request->input('role');
            

            $image_path=$user->user_image;
            $idproof=$user->idproof;


            if($request->Hasfile('user_image'))
            {
                if($image_path)
                    unlink(public_path().$public_path1.$image_path);
                    $file = $request->file('user_image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('images/users/',$filename);
                    $user->user_image = $filename;
                
            }

            if($request->Hasfile('idproof'))
            {
                if($idproof)
                {
                    unlink(public_path().$public_path2.$idproof);
                    $file = $request->file('idproof');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('images/idproof/',$filename);
                    $user->idproof = $filename;
                }
            }
            //mail
            $email= $request->input('email');
            $status = $request->input('status');
            $name = $request->input('name');
            $cnumber=  $request->input('cnumber');
            $data = array('status'=>$status,'name'=>$name,'email'=>$email,'cnumber'=>$cnumber);
           
    
            
            Mail::send('statusmail', $data, function($message) use($email) {
                $message->to($email, 'Ajit Android App')->subject
                ('User Status');
                $message->from('sales@sw7infomedia.com', 'Ajit Android App');

            });
           //adminmail
           Mail::send('adminmail', $data, function($message) use($email) {
            $message->to('admin@gmail.com', 'Ajit Android App')->subject
            ('User Status');
            $message->from('sales@sw7infomedia.com', 'Ajit Android App');

        });

            

            $user->rating = $request->input('rating');
            $user->remember_token = $request->input('remember_token');


            $user->save();

            $user = User::all();
            return redirect('/userlist')->with('success', 'user has been successfully Updated');
        }
        else
        {
            return redirect('/');
        }
    }
    


    public function deleteuser($id)
    {
        $user = User::find($id);
        $public_path1='/images/users/';
      

        $image_path=$user->user_image;
      
		if($image_path)
		{
            unlink(public_path().'/images/users/'.$image_path);
            
        }

       
        $user->delete();


        return redirect('/userlist')->with('user',$user);
    }
    //AJAY CRUD END

}

