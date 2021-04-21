@extends('layouts.customer_dashboard')

@section('styles')
<style>
#text{
	color:white;
}
form { display: inline; }
</style>
@endsection

@section('content')


	@if(session('success'))
		<div class="alert alert-success fade in" style="margin-top:20px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>{{ session('success') }}</strong>
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in" style="margin-top:20px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error! {{ session('danger') }}</strong>
		</div>
	@endif
	@if(session('message'))
        <div class="alert alert-info fade in" style="margin-top:20px;">
            		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           		<strong>Message! {{ session('message') }}</strong>
        </div>
        @endif


        <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
           
            <center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">Your Orders </b></center>
  <hr>  @if($orders!=null)
           
            @foreach($orders as $order)
            <div class="panel panel-default" >
                <div class="panel-body">
               
                               <!-- <a href="{{url('/removeOrder/'.$order->id)}}" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
               
                    <form action="{{url('/orderpdf/'.$order->id)}}" method="POST">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary " name="submit"><i class="fa fa-download"></i></button>
                </form>
                <a href="{{url('/usercart/'.$order->id)}}" class="btn btn-success pull-left" style=""><i class="fa fa-edit"></i></a>
                <br><br> -->
                &nbsp;&nbsp;
              <b>Status:</b> {{$order->status}}<br>
               &nbsp;&nbsp;  <b>Payment Method:</b>  {{$order->payment_method}}
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                       
                            <li class="list-group-item" style="font-size:15px;color:black;">
                        
                                {{ $item['item']['product_name'] }} <br> 
                                | {{ $item['qty'] }} units <br>
                                | Status : {{$item['status']}} 
                                &nbsp;&nbsp;&nbsp;
                                @if($item['reason']!="")
                                <br>|Reason : {{$item['reason']}} 
				                @endif
                                <span class="badge" style="font-size:15px;color:white">₹ {{ $item['price'] }}</span>
                               
                          
                            </li>
                        @endforeach
                    </ul>
                    <br> <span class="pull-left" id="text"style="color:black;"><i class="fa fa-calendar"></i> &nbsp;{{ $order->created_at->format('d-m-Y') }}</span>
                    <div class="pull-right">
                    <span class="  pull-right " style="font-size:16px;color:black;"><b>Total Price:</b>
                   
                     <strong class="badge" style="font-size:17px;color:white;"> ₹  {{ round($order->cart->totalPrice) }} </strong></span>
                    </div>
                </div>
                <div class="panel-footer" style="">

		
                
       

        </div>
    </div> 
           
            @endforeach
           
        
      @else
      <div class="row">
    <div class="col-md-8 col-md-offset-1" >
        <h2 style="color:black;margin-top:150px; margin-bottom:150px;">There are no orders!!!</h2>
    </div>
        </div>
@endif
    </div>
    </div>
    </div>
@endsection
