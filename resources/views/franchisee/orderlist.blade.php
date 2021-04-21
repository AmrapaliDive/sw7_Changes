@extends('layouts.master2')

@section('styles')
<style>
#text{
	color:white;
}
form { display: inline; }
</style>
@endsection

@section('content')
<br><br><br><br>

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
            <div class="col-md-8 col-md-offset-2">
           
            <center><h3 id="text" style="color:black;"><b>Your Orders</b></h3></center>
            <a href="{{url('/dealer_order_table')}}" class="btn btn-primary" >Order Summary<a>
            <hr>
            @if($myorder!=null)
           
            @foreach($myorder as $order)
            <div class="panel panel-default" >
                <div class="panel-body">
               
                <?php
                           $total =0;
                ?>
                
                <!-- <a href="{{url('/removeOrder/'.$order->id)}}" class="btn btn-danger pull-right" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
               
                    <form action="{{url('/orderpdf/'.$order->id)}}" method="POST">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary " name="submit"><i class="fa fa-download"></i></button>
                </form>
                <a href="{{url('/usercart/'.$order->id)}}" class="btn btn-success pull-left" style=""><i class="fa fa-edit"></i></a>
                <br><br> -->
                &nbsp;&nbsp;
               <span style="color:black;"> <b>Name :</b> {{$order->name}}&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;<br>
               <span style="color:black;">  &nbsp;&nbsp; 
               <b> Address :</b>&nbsp; {{$order->address}}</span><br>
               &nbsp;&nbsp;  <b>Status:</b> {{$order->status}}<br>
               &nbsp;&nbsp;  <b>Payment Method:</b>  {{$order->payment_method}}
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                       
                            <li class="list-group-item" style="font-size:15px;color:black;">
                            @if ($item['item']['dealer_id']==$dealer->id)
                                {{ $item['item']['product_name'] }} <br> | {{ $item['qty'] }} units
				                        <span class="badge" style="font-size:15px;color:white">₹ {{ $item['price'] }}</span>
                                <?php
                                  $total = $total + $item['price'];
                                ?>
                            @endif
                            </li>
                        @endforeach
                    </ul>
                    <br> <span class="pull-left" id="text"style="color:black;"><i class="fa fa-calendar"></i> &nbsp;{{ $order->created_at->format('d-m-Y') }}</span>
                    <div class="pull-right">
                    <span class="  pull-right " style="font-size:16px;color:black;"><b>Total Price:</b>
                   
                     <strong class="badge" style="font-size:17px;color:white;"> ₹  {{ round($total) }} </strong></span>
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
