@extends('layouts.master')



@section('styles')
  <style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,500,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,500,500i,500,500i,600,600i,700,700i,800,800i,900,900i');
body{
    
    background:whitesmoke;
  
}
img{
  height:100%;
}
.img-responsive{
  height:100%;
}

.card-deck{
  padding: 15px 25px 25px 25px;
  background-color:white; 
  border: 1px solid #d6d1d1;
  border-radius: 5px;
}
.card {
  transition: all .5s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
    /* width: 33.3%; */
  /* position: relative; */
  width:100%;
  height:200px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}
.card-title{
  color:#000;
  font-size:15px;
  line-height:20px;
}

.card-title:hover{
  text-decoration: underline solid #000;
  color:#000;
}

.card__info {
z-index: 2;
  background-color: #fff;
  border-bottom-left-radius: 12px;
border-bottom-right-radius: 12px;
   padding: 16px 25px 25px 25px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
  color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 22px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}
#rupee{
  font-family: 'Roboto', sans-serif;
  font-size: 22px;
}
a:hover{
  text-decoration: underline solid #000;
  color:#000;
}
a {
  color:#000;
}
.menus a{
  color:#000;
  font-size:13px;
}
.menus a:hover{
  text-decoration: underline solid #000;
}

.menus li{
  padding:5px;
  color:black;
}
.menus p{
  color:black;
  font-size:15px;
  font-weight:500;
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
  background:#82ae56;
  color:black;
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
.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 20%;
  padding: 0 20px;
}
#ca{
  font-size:30px;
}
blink {
  -webkit-animation: 3s linear infinite condemned_blink_effect; // for Android
  animation: 5s linear infinite condemned_blink_effect;
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

<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


    <script type="text/javascript">

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
            if (e.keyCode == 50) changeQuantity(-1,this);
            console.log($(this).val());
          calculate(this);
        });
	});



  function changeQuantity(num,obj)
       {
            var gram = parseInt($(obj).parent().find('.gram').val());
            //alert(gram);
            if(gram<=0)
                {
                  alert("Please Select How many gram!!!");
                }
            //$("#quantity").val( parseInt($("#quantity").val())+num);
            if(gram>0)
            {
			      console.log(obj);
            var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0)
            {$(obj).parent().find('.qty').val(0);return;}
            $(obj).parent().find('.qty').val( value_to_set);
            }
        }

        $('.gram').on('change',function(){
          calculate(this);
        });

  function calculate(obj){
    var gram = parseInt($(obj).parent().find('.gram').val());
    if(gram<=0)
                {
                  alert("Please Select How many gram!!!");
                  
                  var value_to_set= 1;
                  $(obj).parent().find('.qty').val(value_to_set);
                }
    else
      {
      var price = parseFloat($(obj).parent().parent().find('.amount').val()) || 0;
     
      console.log(price);
     var quantity = parseInt($(obj).parent().find('.qty').val());
     var gram = parseInt($(obj).parent().find('.gram').val());
    // alert(gram);
    
      var q= sessionStorage.setItem("quantity", quantity);
      var g= sessionStorage.setItem("gram", gram);
      var p=sessionStorage.setItem("price", price);
      //console.log(q);
      var total = (price *  (gram/1000))*quantity;
     // console.log(total);    
     
     $(obj).parent().parent().find('.card__by').text(total);

     var id= parseInt($(obj).parent().parent().parent().find('.qty').val());
      }
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
 var gram = sessionStorage.getItem("gram");
 var price = sessionStorage.getItem("price");
 //alert(quantity);
 sessionStorage.removeItem("quantity");
 sessionStorage.removeItem("gram");
 sessionStorage.removeItem("price");
  // $('input[name="qty"]').each(function(){
  //           mydata = $(this).val();
	//     	myid= $(this).attr('id');
  //       alert(myid);
	// 		if(id == myid)
	// 		{
			
	// 			window.alert(mydata);
	// 			return false;
	// 		}
	// 	});
  var amount=price;
  var qty=quantity;
  var gram=gram;
  //alert(gram);
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

callToAjax(id,qty,gram,amount);
//alert("Product Added to Cart Successfully!!!")
}

function callToAjax(id,qty,gram,amount)
{
  //var url=url: 'add-to-cart/'+id+'/'+qty;
//  alert(qty);

  $.ajax({
  url: 'add-to-cart/'+id+'/'+qty+'/'+gram+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.cart);
}
});

}
</script>
@endsection


@section('content')

<div class="container-fluid" style="margin:10px 20px 0px 20px;">
<div class="row">
  <div class="col-sm-2" style="margin-top:1px;">
    <p style="color:black; font-size:30px; font-weight:400">Automative Parts</p>
    <div class="menus">
    <ul>
      <p>Shop by Category</p>
      <li><a href="{{url('/car_and_truck_parts')}}">Cars & Truck Parts</a></li>
      <li><a href="{{url('/motorcycle_parts')}}">Motorcycle Parts</a></li>
      <li><a href="{{url('/atv_parts')}}">ATV Parts</a></li>
      <li><a href="{{url('/scooter_parts')}}">Scooter Parts</a></li>
      <li><a href="{{url('/snowmobile_parts')}}">Snowmobile Parts</a></li>
      <li><a href="{{url('/motorcycle_apparel')}}">Motorcycle Apparel</a></li>
      <li><a href="{{url('/snowmobile_apparel')}}">Snowmobile Apparel</a></li>
      <li><a href="{{url('/racing_parts')}}">Performance & Racing Parts</a></li>
      <li><a href="{{url('/vintage')}}">Vintage car & Truck Parts</a></li>
      <li><a href="{{url('/car_electronics')}}">Car Electronics</a></li>
     

    </ul>
    </div>
  </div>
    
    @if(Session::has('success'))
      <div class="container-fluid" style="margin-top:150px;">
        <div class="row">
          <div class="col-md-6 col-md-offset-3" >
            <div id="charge-message" class="alert alert-success">
              {{ Session::get('success') }}
            </div>
          </div><br>
          <div class="col-md-6 col-md-offset-3"style="margin-bottom:30px;">
          <a href="{{ url('/') }}" class="btn btn-warning pull-left"><i class="fa fa-angle-left"></i> Continue Shopping</a>
          </div>
        </div>
      </div>
    @endif
  <div class="col-sm-10" style="margin-top:50px;">
      <div class="card-deck text-center" >
       <p style="font-size:20px;color:black; text-align:left; font-weight:400; margin-bottom:10px;">Shop By Category</p>
        <div class="row" >
          <div class="column">
            <a href="{{url('/car_and_truck_parts')}}">
              <div class="card text-center">
              <img class="card-img-top" src="{{asset('images/motors/cars_trucks_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
              <div class="card-body">
                  <p class="card-title">Cars & Truck Parts</p>
                </div>
              </div>
            </a>  
          </div>
          <div class="column">
            <a href="{{url('/motorcycle_parts')}}">
              <div class="card text-center">
              <img class="card-img-top" src="{{asset('images/motors/motorcycle_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Motorcycle Parts</p>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('//atv_parts')}}">
              <div class="card text-center" >
              <img class="card-img-top" src="{{asset('images/motors/atv_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">ATV Parts</p>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/scooter_parts')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/motors/scooter_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Scooter Parts</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/snowmobile_parts')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/motors/snowmobile_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Snowmobile Parts</p>
                </div>
                </div>
            </a>
          </div>
        </div>

        <div class="row" style="margin-top:40px">
          <div class="column">
            <a href="{{url('/motorcycle_apparel')}}">
               <div class="card text-center">
               <img class="card-img-top" src="{{asset('images/motors/motorcycle_apparel.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Motorcycle Apparel</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/snowmobile_apparel')}}">
                <div class="card text-center">
                <img class="card-img-top" src="{{asset('images/motors/snowmobile apparel.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Snowmobile Apparel</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/racing_parts')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/motors/racing_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Performance & Racing Parts</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
              <a href="{{url('/vintage')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/motors/vintage_parts.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Vintage Car & Truck Parts</p>
                </div>
                </div>
              </a>
          </div>
          <div class="column">
              <a href="{{url('/car_electronics')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/motors/car_electronics.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Car Electronics</p>
                </div>
                </div>
              </a>
          </div>
        </div>
      </div>
  </div>
</div>
</div> 
</div> <br><br><br><br><br><br>
@endsection
