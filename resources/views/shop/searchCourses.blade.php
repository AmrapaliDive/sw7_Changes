@extends('layouts.master')

@section('title')
Products
@endsection

@section('styles')
  <style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
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
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
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
  //url: 'add-to-cart/'+id+'/'+qty+'/'+amount,
  url: "{{URL::to('add-to-cart')}}" + '/'+id+'/'+qty+'/'+amount,
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
  <div class="container-fluid" style="margin-top:30px;">
<center>
  <div class="col-xs-12 col-sm-12 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <!-- <div class="search-area"> -->
          <?php
              Use App\Franchisee;
            $cities = Franchisee::groupBy('city')->get();
          ?>
             <form action="{{ url('/serachCourses') }}" method="get">
              {{csrf_field()}}
              <!-- <div class="control-group " style="border: 2px solid #f3f3f3;"> -->
                 <select class="categories-filter animate-dropdown" style="padding-top:10px;padding-bottom:10px;"  id="city" name="city" required>
                 <option class="dropdown-menu" role="menu" value="">Select City</option>
                  <!-- <option class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="#" style="color:black;"><b class="caret"></b></a> -->
                    <ul class="dropdown-menu" role="menu" >
                      <!-- <li class="menu-header">Select City (Area)</li> -->
                      <!-- <option role="presentation"><span role="menuitem" tabindex="-1" value="">Select City</span></option> -->
                     
                       @foreach($cities as $city)
                      <option role="presentation"><span role="menuitem" tabindex="-1" >{{$city->city}}</span></option>
                      @endforeach
                    </ul>
                  </option>
                </select>
             
			  <input type="hidden" id="course" name="course" value="{{ $course }}">
             
              
                <!-- <a class="search-button" href="#" ></a></div> -->
                <button id="btn" type="submit" class="btn btn-primary" >Search <i class="fa fa-search" aria-hidden="true"></i></button></div>
            </form>
          <!-- </div> -->
          </center>  
<!-- </div>   -->

<br><br>

<div class="container" style="" >
<div class="">
	<div class="row">

		<div class="col-12">
    <?php
       
        Use App\Batch;
        Use App\User;
      ?>
    <h2>	<center>Batches</center></h2><br>
			<div class="row">
		
     @if($batches!=null)
     @foreach($batches as $batches)
			<div class="4">
      <div id="card" class="col-md-3 col-xs-12 card"style="margin-top:0px;box-shadow: 8px 8px 8px 8px rgba(0,0,0,0.7);
  transition: 0.3s;
  background:white;height: fit-content;min-height:340px;">  
			  
			          
						<a href="{{ url('batchview/'.$batches->id) }}" >
						
						<!-- <img class="card-img-top rounded mx-auto d-block" src="{!!  URL::to('images/storage/batches',array($batches->course_image)) !!} " alt="Product" style="width:300px;height:200px;"> -->
           <center> <img style="margin-left: 0px;margin-right: 0px;width:200px;height:200px;" src="{!!  URL::to('images/storage/batches',array($batches->course_image)) !!}  " alt="Product" class="img-responsive"></a></center>
					
				 <div class="card-body">
         <?php
          
          $user = User::where('id',$batches->user_id)->first();
          $franchisee = Franchisee::where('user_id',$user->id)->first();
          ?>
						<h4 class="card-title text-center" style="font-family:Times New Roman, Times, serif">{{ $batches->batch_name }}</h4>
            <h4 class="card-title text-center" style="font-family:Times New Roman, Times, serif">{{ $franchisee->city }}</h4>
						<p class="card-text"><span id="rupee" class="rupee" style="color:#82ae46;font-size: 18px;"> </span>
						  <span class="card__by1" id="card__by1" name="card__by1" style="color:#82ae46;   font-size: 18px;">
					   
						  
					   
						 <input type="hidden" name="amount" id="amount"  value="{{ $batches->course_final_fee }}"  class="amount"/>   
                        <input type="hidden" name="batchid" id="batchid"  value="{{ $batches->id }}"  class="productid"/>      </p>
				   </div>
					  <ul class="list-group list-group-flush">
						<li class="list-group-item text-center" style="border:none;font-size:15px;"><span id="ruppee" class="ruppee" style=""> &#8377;</span>
					   <span class="card__by" id="card__by" name="card__by" style="font-family:sans-serif;"> {{ $batches->course_final_fee }} (Including GST )</span> </li>
					   <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Vestibulum at eros</li>-->
					  </ul>
					 <div class="card-body text-center">
					
					
          <!-- <a href="{{url('/enrolForAdmission/'.$batches->id)}}" class="btn btn-primary submit" name="submit" id="submit">Enrol To Batch</a> -->
          <a class="btn btn-primary" href="{{url('/getcourseAdmission/'.$batches->id)}}" data-target="" data-toggle="modal">Register Now</a>
         

         
      
         
         

                  
				  </div>
				  <br>
			   </div>
        @endforeach
         @endif
			  </div><!--col 4 end-->
		
			</div><!--row end-->
		</div>
	</div>
  </div>
</div>  
<br><br><br>  
@endsection
