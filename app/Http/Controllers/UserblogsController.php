<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Userblogs;

use App\Tag;

use Auth;
use Mail;
use App\Contact;
use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserblogsController extends Controller
{

    public function index()
    {
        return view('blogs.blogs');
    }


    public function getblogs(Request $request, $searchval = 'all')
    {
        if($searchval === 'all')
        {
            $blogs = Userblogs::paginate(10);
            return view('shop.blogsearch', ['results' => $blogs]);
        }
        else
        {
          $tag = Tag::where('tag', $searchval)->first();
          $blogs = $tag->blogs()->paginate(30);
          return $blogs;
        }
    }

    public function browse(Request $request)
    {
        $results = Userblogs::orderBy('created_at', 'desc')->get();
        return view('shop.blogsearch', ['results' => $results]);
    }

    public function home_page_browse(Request $request)
    {
        $results = Userblogs::orderBy('created_at', 'desc')->paginate(10);
        return view('shop.homepage', ['results' => $results]);
    }

    public function search(Request $request)
    {
        // $results = $c = collect();
        // if($request->input('searchNavbar') !== null)
        // {
        //     $tag = Tag::where('tag', $request->input('searchNavbar'))->first();
        //     if(!$tag == null)
        //     {
        //         $results = $tag->blogs()->orderBy('created_at', 'desc')->paginate(10);
        //         session()->put('blogSearchTag', $request->input('searchNavbar'));
        //     }
        //     return view('shop.blogsearch', ['results' => $results]);
        // }
        // else
        // {
        //     if(session()->has('blogSearchTag'))
        //     {
        //         $val = session('blogSearchTag');
        //         $results = Tag::where('tag', $val)->first()->blogs()->orderBy('created_at', 'desc')->paginate(10);
        //         return view('shop.blogsearch', ['results' => $results]);
        //     }
        // }
        $search = $request->get('searchNavbar');
        $results = Userblogs::orderBy('created_at', 'desc')->where('title','LIKE','%'.$search.'')->get();
        return view('shop.blogsearch', ['results' => $results]);
    }

    public function showblog(Request $request, $id)
    {
        $blog = Userblogs::find($id);
        return view('shop.showblog', ['blog' => $blog]);
    }

    public function setMeeting(Request $request)
    {
            $contact = new Contact();
            $contact->name = $request->get('name');
           // $contact->last_name = $request->get('last_name');
           $contact->email = $request->get('email');
           $contact->phone = $request->get('phone');
           $contact->message = $request->get('message');

           $name = $request->get('name');
           // $last_name = $request->get('last_name');
           $email = $request->get('email');
           $phone = $request->get('phone');
           $mymessage = $request->get('message');

           $data = array('name'=>$name, 'email'=>$email,'phone'=>$phone,'mymessage'=>$mymessage );

           $data1 = array('name'=>$name, 'email'=>$email,'phone'=>$phone,'mymessage'=>$mymessage );
           
            Mail::send('mail5', $data, function($message)  {
                $message->to('parkershirts001@gmail.com', 'Parker Shirts')->subject
                ('Customer Notifications');
                $message->from('parkershirts001@gmail.com', 'Parker Shirts');
            });
           Mail::send('mail5', $data, function($message) use ($contact) {
            $message->to($contact->email,$contact->name)->subject
            ('Thanking you from Parker Shirts');
             $message->from('parkershirts001@gmail.com', 'Parker Shirts');
               });


   
       return redirect('/')->with('success', 'contact us has been successfully created');
       }

       public function gmaps()
       {
           $locations = Location::all();
           return view('shop.map',compact('locations'));
       }
   
}
