<?php

namespace App\Http\Controllers\Dealer;
use Illuminate\Http\Request;	
use App\Http\Controllers\Controller;
use App\Account;
use App\Dealer;
use App\User;
use App\Customer;


use Auth;
use DB;


class AccountController extends Controller
{

	public function index()
	{
			return view('dealer.account');
	}		
	public function account_view()
	{	
		if(Auth::check() && Auth::user()->role == 'chefa')
		{
			$user = Auth::user();
			$chef = Chef::where('user_id', $user->id) ->get(); 
			$card = Account::where('user_id', $user->id) ->get();
			$admin_rate = AdminRate::orderBy('id','desc')->get()->first();
			$user_role=$user->role;
			$count= Delivery::where('chef_id', $user->id)
			->where('deliveries.delivery_chef_status', 'yes')
			->where('deliveries.delivery_customer_cancelled_status', 'yes')
			->where('deliveries.delivery_chef_status_reason', '')
			->count();

			$deliveries = DB::table('deliveries')
				->join('orders', 'deliveries.order_id', '=', 'orders.id')							
				->select('deliveries.*', 'orders.order_start_date', 'orders.order_end_date')
				->where('deliveries.chef_id', $user->id)
				->where('deliveries.delivery_chef_status', 'yes')
				->where('deliveries.delivery_customer_cancelled_status', 'yes')
				->where('deliveries.delivery_chef_status_reason', '')
				->get();
			
			$from='';$to='';$rate=$admin_rate->profit_rate;	
			return view('chef.account_view',compact('chef','card','deliveries','from','to','count','rate'));
		}
		else
		{
			return redirect('/chef_acc')->with('danger', 'Sorry! Please Contact Administrator..');	
		}
	}

	public function av_date(Request $request)
	{	
		if(Auth::check() && Auth::user()->role == 'chefa')
		{
			$user = Auth::user();
			$chef = Chef::where('user_id', $user->id) ->get(); 
			$card = Account::where('user_id', $user->id) ->get();
			$user_role=$user->role;
			$from = $request->input('from'); 
			$to = $request->input('to'); 
			$count= Delivery::where('chef_id', $user->id)
			->whereBetween('delivery_date', [$from, $to])
			->where('deliveries.delivery_chef_status', 'yes')
			->where('deliveries.delivery_customer_cancelled_status', 'yes')
			->where('deliveries.delivery_chef_status_reason', '')
			->count();
			$admin_rate = AdminRate::orderBy('id','desc')->get()->first();
			$rate=$admin_rate->profit_rate;
			$deliveries = DB::table('deliveries')
				->join('orders', 'deliveries.order_id', '=', 'orders.id')							
				->select('deliveries.*', 'orders.order_start_date', 'orders.order_end_date')
				->where('deliveries.chef_id', $user->id)
				->whereBetween('deliveries.delivery_date', [$from, $to])
				->where('deliveries.delivery_chef_status', 'yes')
				->where('deliveries.delivery_customer_cancelled_status', 'yes')
				->where('deliveries.delivery_chef_status_reason', '')
				->get();

			return view('chef.account_view',compact('chef','card','deliveries','from','to','count','rate'));
		}
		else
		{
			return redirect('/chef_acc')->with('danger', 'No Data Found...');	
		}
	}

			public function insert(Request $request)
			{
					$accounts = new Account();
					$accounts->user_id = Auth::user()->id;
					$accounts->account_name = $request->input('account_name');
					$accounts->bank_name = $request->input('bank_name');
					$accounts->account_no = $request->input('account_no');
					$accounts->ifsc_code = $request->input('ifsc_code');
					$accounts->micr_code = $request->input('micr_code');

					$file3 = $request->file('pdf');
					$filename3 = md5_file($file3->path()).'.'.$file3->getClientOriginalExtension();
					$file3->move(base_path().'/public/images/storage/documents/', $filename3);
					$accounts->pdf = '/images/storage/documents/'.$filename3;
				
					$accounts->save();
					return redirect('/')->with('success', 'Account details successfully inserted.');
			}

			public function accountlist()
			{
					$accounts = Account::all();
					return view('chef.accountlist', ['accounts' => $accounts]);
				
			}
		
			
			public function delete($id)
			{
				if(Auth::check() && Auth::user()->role == 'admin')
				{
					$account = Account::find($id);
					$account->delete();
					return redirect('/accountlist')->with('success', 'Account has been successfully Deleted');
				}
				 else
				{
					return redirect('/user/login');
				}
			}
		
		


			public function edit($id)
			{
				if(Auth::check() && Auth::user()->role == 'admin' || Auth::user()->role == 'chefa')
				{
					$account = Account::find($id);
					if(!empty($account))
					{
					$accounts = Account::find($id);
						return view('chef.account', ['accounts' => $accounts]);
					}
					else
					{
						return redirect('/chef')->with('danger', 'Account not found.');
					}
				}
				
			}

			public function accountedit()
			{
				if(Auth::check())
        		{
            		$user = Auth::user();  					
					$accounts = Account::where('user_id', $user->id) ->get();
					if(!empty($accounts))
					{
						
						return view('chef.account_edit', ['accounts' => $accounts]);
					}
					else
					{
						return redirect('/chef')->with('danger', 'Account not found.');
					}
				}
				
			}
		
		
			public function update(Request $request, $id)
			{
				if(Auth::check() && Auth::user()->role == 'admin' || Auth::user()->role == 'chefa')
				{
				$accounts = Account::find($id);
				if(!empty($accounts))
				
					$accounts->account_name = $request->input('account_name');
					$accounts->bank_name = $request->input('bank_name');
					$accounts->account_no = $request->input('account_no');
					$accounts->bsb_code = $request->input('bsb_code');
		
		
		
					$accounts->save();
					return redirect('/accountlist')->with('success', 'Account has been successfully Updated');
		
				}
				else 
				{
					return redirect('/admin/login')->with('danger', 'You Cant update the Records.');
				}
			}

			public function accountupdate(Request $request)
			{
				if(Auth::check() && Auth::user()->role == 'admin' || Auth::user()->role == 'chefa')
				{
				$user = Auth::user();
				$accounts = Account::where('user_id',$user->id)->get()->first();
				if(!empty($accounts))
				
					$accounts->account_name = $request->input('account_name');
					$accounts->bank_name = $request->input('bank_name');
					$accounts->account_no = $request->input('account_no');
					$accounts->bsb_code = $request->input('bsb_code');
		
		
		
					$accounts->save();
					return redirect('/chef_acc')->with('success', 'Account has been successfully Updated');
		
				}
				else 
				{
					return redirect('/admin/login')->with('danger', 'You Cant update the Records.');
				}
			}
}
