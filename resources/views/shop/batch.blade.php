@extends('layouts.master')

@section('title')
Products
@endsection

@section('styles')
  <style>
<!--@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');-->
img{
  height:200px;
}
.img-responsive{
  height:200px;
}

.card {
  /* margin-right: 25px; */
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
  /* width: 34.8rem; */
  margin:5px;
    /* width: 33.3%; */
  /* position: relative; */
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}


.card__info {
z-index: 2;
  background-color: #fff;
  border-bottom-left-radius: 12px;
border-bottom-right-radius: 12px;
   padding: 15px 22px 22px 22px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    /* text-transform: uppercase; */
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 500;
    color:#82ae46;
}

#gram{
  
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:16px;
  /* background:#82ae46; */
  background:white;
  color:black;

  align:end;
  text-align-last:center;
}
.card__title {
    margin-top: 5px;
    margin-bottom: 5px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 15px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}
#ruppee{
  font-family: 'Roboto', sans-serif;
}
a:hover{
  text-decoration:none;
}
a {
  text-decoration: none;
}

select, option {
	font-family: 'FontAwesome';
	font-style: normal;
  align:center;
}
#gram{
  height:50px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  background:#2ab27b;
  color:white;
  align:end;
  text-align-last:center;
}
select:focus{
  height:50px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  outline: none;
}
option {
   -webkit-border-radius:25px;
   font-family: 'Patua One', cursive;
  
} 

option:hover{
  /* height:50px; */
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  outline: none;
  background:white;
  color:black;
  
}
#ca{
  font-size:30px;
}
blink {
  -webkit-animation: 3s linear infinite condemned_blink_effect; // for Android
  animation: 4s linear infinite condemned_blink_effect;
  text-shadow: black 2px 2px 1px;
}
@-webkit-keyframes condemned_blink_effect { // for Android
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}


 </style>
 <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <!-- <link href="http://materializecss.com/forms.html" rel="stylesheet"> -->
  
@endsection


@section('scripts')
<!-- <script>
    $(function(){
      $('#dynamic_select').on('change', function () {
          var q = $(this).val(); // get selected value
          alert(id);
          if (id) { 
  
              window.location = "/add-to-cart/"+ product->id +"/quantity/" + q ;
          }
          return false;
      });
    });
</script> -->

<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <script type="text/javascript">

$().ready(function(){
  sessionStorage.setItem("quantity", 0);
});

    $().ready(function(){
        //calculate();
	
        $(".minus").click(function(){
            changeQuantity(-1,this);
            calculate(this);
            
            

        });
        $(".plus").click(function(){
            changeQuantity(1,this);
          calculate(this);
        });
        $(".qty").keyup(function(e){
            if (e.keyCode == 38) changeQuantity(1,this);
            if (e.keyCode == 40) changeQuantity(-1,this);
            console.log($(this).val());
          calculate(this);
        });
	});



  function changeQuantity(num,obj)
       {
             console.log(obj);
            var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0){$(obj).parent().find('.qty').val(0);return;}
            $(obj).parent().find('.qty').val( value_to_set);
        }
        calculate(this);
     

  function calculate(obj){
        var price = parseFloat($(obj).parent().parent().find('.amount').val()) || 0;
     
      console.log(price);
     var quantity = parseInt($(obj).parent().parent().find('.qty').val());
      var q= sessionStorage.setItem("quantity", quantity);
      var p=sessionStorage.setItem("price", price);
     
      var total = price * quantity;
      $(obj).parent().parent().find('.card__by').text(total);

     var id= parseInt($(obj).parent().parent().parent().find('.qty').val());
    }

</script>
<script>
$(document).ready(function(){
    
    var total = parseInt($(".icart").text()); 
    $(".submit").click(function(){
                          //add to cart
        var total = parseInt($(".icart").text()); 
        console.log(total);
        if(total=="NaN")
        {
            ttotal=0;
          $(".icart").text(ttotal); 
        }//update
        else
        {

            total++;  
            $(".icart").text(total);    
        }
    });
});

function addToCart(id) {
 // alert(id);
 var quantity = sessionStorage.getItem("quantity");
 var price = sessionStorage.getItem("price");
 //alert(quantity);
 sessionStorage.removeItem("quantity");
 sessionStorage.removeItem("price");
  
  var amount=price;
  var qty=quantity;
 if(qty<=0)
 {
	 alert("Please Select Quantity!!!");
	 var total = parseInt($(".icart").text()); 
		//var total = $(".icart").text()); 
            console.log(total);
            total--;  
            $(".icart").text(total);    
			console.log(total);
	 return;
 }

callToAjax(id,qty,amount);
alert("Product Added to Cart Successfully!!!")
}

function callToAjax(id,qty,amount)
{
  //var url=url: 'add-to-cart/'+id+'/'+qty;
 // console.log(url);

  $.ajax({
  url: 'add-to-cart/'+id+'/'+qty+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.cart);
}
});

}

function addToWishlist(id) {
  $.ajax({
  url: "{{URL::to('/user/add-to-wishlist')}}" + '/'+id,
  //  url: "{{URL::to('/deductOne')}}" + '/'+id,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.wishlist);
  
  
  //$("#addToWishlist").text("Wishlisted");
  
}
});
alert("Product Added to Wishlist Successfully!!!")
location.reload();
}

function RemoveFromWishlist(id) {
  $.ajax({
  url: "{{URL::to('/user/remove-from-wishlist1')}}" + '/'+id,
  //  url: "{{URL::to('/deductOne')}}" + '/'+id,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.wishlist);
  
  
  //$("#addToWishlist").text("Wishlisted");
  
}
});
alert("Product Remove from Wishlist Successfully!!!")
location.reload();
}
</script>

@endsection


@section('content')
 <!-- @if(Session::has('success'))
  <div class="container" style="margin-top:30px;">
    <div class="col-md-6 ">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
 
    <div class="col-md-6 ">

    <a href="{{ url('/') }}" class="btn btn-warning pull-left"><i class="fa fa-angle-left"></i> Continue Shopping</a>
</div>
</div>

  @endif
  <div class="container-fluid" style="margin-top:30px;">


<div class="col-md-12" >

@foreach($batches->chunk(3) as $batchChunk)
      @foreach($batchChunk as $batch)
      <div class="col-md-3 card"style="margin-bottom:30px;padding:0px">
      <a href="{{ url('batchview/'.$batch->id) }}" >
            <img style="margin-left: 0px;margin-right: 0px;width:100%;height:150px;" src="{!!  URL::to('images/storage/batches',array($batch->course_image)) !!}  " alt="Product" class="img-responsive">
            <div class="card__info">
              <!-- <span class="card__category">{{ $batch->type }}</span> -->
  <!--            <h3 class="card__title">{{ $batch->batch_name }}</h3>
              <span id="rupee" class="rupee"> ₹</span>
              <span class="card__by" id="card__by" name="card__by">
               {{ $batch->course_final_fee }}</span> 
              <!-- <b> /unit</b> -->
 <!--            <input type="hidden" name="amount" id="amount"  value="{{ $batch->course_final_fee }}"  class="amount"/>   
             <input type="hidden" name="batchid" id="batchid"  value="{{ $batch->id }}"  class="productid"/>   
             </a> 
             
            

              
                <br>
              <!-- <i class="button plus fa fa-plus-circle"  value='+' style="font-size:30px;"></i>
              <input type="text" name="qty" id="qty"  value="0" style="width:20%;"  class="input-text qty"/>
              <i class="button minus fa fa-minus-circle"  value='-' style="font-size:30px;"></i>
              <br><br> -->
              <!-- @if(Auth::check() && (Auth::user()->role!="admin" || Auth::user()->role!="franchisee"))
                <button type="submit"   class="btn btn-primary pull-right submit" name="submit" id="submit" onclick="addToCart({{$batch->id}})"><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @else
              <button type="submit"   class="btn btn-primary pull-right submit" name="submit" id="submit" onclick="addToCart({{$batch->id}})"><i class="fa fa-cart-arrow-down" style="font-size:20px;"></i></button> 
              @endif -->
  <!--            <a class="btn btn-primary pull-right" href="{{url('/enrolForAdmission/'.$batch->id)}}">Enrol To Batch</a>
              <br>  <br>
              <!-- </form> -->
 <!--           </div>
      </div>
      
      @endforeach
      
      
   </div>
@endforeach
</div>-->
<br><br>
			  @if(Session::has('success'))
		  <div class="container" style="margin-top:30px;">
			<div class="col-md-6 ">
			  <div id="charge-message" class="alert alert-success">
				{{ Session::get('success') }}
			  </div>
			</div>
		 
			<div class="col-md-6 ">

			<a href="{{ url('/') }}" class="btn btn-warning pull-left"><i class="fa fa-angle-left"></i> Continue Shopping</a>
		</div>
		</div>

		  @endif
<div class="container style="" >
<div class="">
	<div class="row">

		<div class="col-12" style="
    padding-left: 0px;
    padding-right: 0px;">
      <?php
        Use App\Franchisee;
        Use App\Batch;
        Use App\User;
      ?>
			<div class="row">
			 @foreach($batches->chunk(3) as $batchChunk)
             @foreach($batchChunk as $batch)
     
			<div class="4">
      <div id="card" class="col-md-3 col-xs-12 card"style="margin-top:0px;box-shadow: 8px 8px 8px 8px rgba(0,0,0,0.7);
  transition: 0.3s;
  background:white;height: fit-content;min-height:340px;">  
			  
			          
						<a href="{{ url('batchview/'.$batch->id) }}" >
						
						<!-- <img class="card-img-top rounded mx-auto d-block" src="{!!  URL::to('images/storage/batches',array($batch->course_image)) !!} " alt="Product" style="width:300px;height:200px;"> -->
           <center> <img style="margin-left: 0px;margin-right: 0px;width:200px;height:200px;" src="{!!  URL::to('images/storage/batches',array($batch->course_image)) !!}  " alt="Product" class="img-responsive"></a></center>
					
				 <div class="card-body">
						<h4 class="card-title text-center" style="font-family:Times New Roman, Times, serif">{{ $batch->batch_name }}</h4>
            <?php
          
            $user = User::where('id',$batch->user_id)->first();
            $franchisee = Franchisee::where('user_id',$user->id)->first();
            ?>
            <h4 class="card-title text-center" style="font-family:Times New Roman, Times, serif">{{ $franchisee->city }}</h4>
						<p class="card-text"><span id="rupee" class="rupee" style="color:#82ae46;font-size: 18px;"> </span>
						  <span class="card__by1" id="card__by1" name="card__by1" style="color:#82ae46;   font-size: 18px;">
					   
						  
					   
						 <input type="hidden" name="amount" id="amount"  value="{{ $batch->course_final_fee }}"  class="amount"/>   
                        <input type="hidden" name="batchid" id="batchid"  value="{{ $batch->id }}"  class="productid"/>      </p>
				   </div>
					  <ul class="list-group list-group-flush">
						<li class="list-group-item text-center" style="border:none;font-size:15px;"><span id="ruppee" class="ruppee" style=""> &#8377;</span>
					   <span class="card__by" id="card__by" name="card__by" style="font-family:sans-serif;"> {{ $batch->course_final_fee }} (Including GST )</span> </li>
					   <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Vestibulum at eros</li>-->
					  </ul>
					 <div class="card-body text-center">
					
					
          <!-- <a href="{{url('/enrolForAdmission/'.$batch->id)}}" class="btn btn-primary submit" name="submit" id="submit">Enrol To Batch</a> -->
          <a class="btn btn-primary" href="{{url('/getcourseAdmission/'.$batch->id)}}" data-target="" data-toggle="modal">Register Now</a>
         

         
      
         
         

                  
				  </div>
				  <br>
			   </div>
			  </div><!--col 4 end-->
			@endforeach
			@endforeach
			</div><!--row end-->
		</div>
	</div>
  </div>
</div>

<br><br>


        
    
@endsection
