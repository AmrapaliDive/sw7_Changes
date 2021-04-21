@extends('layouts.master')

@section('title')
    User Profile
@endsection

@section('styles')
<style>
#text{
	color:black;
	
}
.container
{
    margin-top: 90px;
}

</style>
@endsection

@section('content')

        <div class="container" style="margin-top:40px;" >
            <h3 >My Orders</h3>
            <hr>
            <div class="col-md-12">
                <form action="{{ url('/ordersearch') }}" method="get" >
                <input type="text" id="psearch" placeholder="Search Order Here..." style="height:45px; width:80%" name="psearch">
                <button id="btn"  style="height:40px; width:40px;"  type="submit"><i class="fa fa-search"  style="color:black	;"></i></button>
                </form>
            </div>
            
            
            @foreach($orders as $order)
            
            <div class="panel panel-default card">
                <div class="panel-body ">
                <h4 id="text" style="color:#2ab27b; font-size:20px;margin-left:0px;">{{ $order->created_at }}</h4>
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                        
                            <li class="list-group-item" style="font-size:20px;">
                                <span class="badge"style="font-size:15px;">₹ {{ $item['price'] }}</span>
                                {{ $item['item']['title'] }} | {{ $item['qty'] }} units
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer" style="font-size:20px;">
                    <strong>Total price: ₹  {{ $order->cart->totalPrice }}</strong>
                    <br>
                    <strong>Status: {{ $order->status}}
                    @if($order->reason!="")
                     -: {{$order->reason}} 
                    @endif
                    <br>
                    </strong>
                    <strong style="color:blue;">{{ $order->payment_method}} </strong>
                </div>

            </div>
            <br><br>
            @endforeach
            <center>
          
			{{ $orders->links() }}

        </center>
        </div>
    

    


    <br><br>
@endsection
