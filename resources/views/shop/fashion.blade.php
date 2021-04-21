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
  
}.row:after {
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
    <p style="color:black; font-size:30px; font-weight:400">Fashion</p>
    <div class="menus">
    <ul>

   

      <p>Shop by Category</p>
      <li><a href="{{url('/womensClothing')}}"> Women's Clothing</a></li>
      <li><a href="{{url('/womensShoes')}}">Women's Shoes</a></li>
      <li><a href="{{url('/mensClothing')}}">Men's Clothing</a></li>
      <li><a href="{{url('/mensShoes')}}">Men's Shoes</a></li>
      <li><a href="{{url('/mensAccessories')}}">Men's Accessories</a></li>
      <li><a href="{{url('/womwomensBagsensClothing')}}">Women's Bags & Handbags</a></li>
      <li><a href="{{url('/kidsClothing')}}">Kids' Clothing, Shoes & Accessories</a></li>
      <li><a href="{{url('/watches')}}">Watches, Parts & Accessories</a></li>
     
     
      
     
      <!-- <li><a href="#">Misty Harbor Men's Coats and Jackets</a></li> -->
      <!-- <li><a href="#">Cameras & Photo</a></li>
      <li><a href="#">Cell Phones, Smart Watches & Accessories</a></li>
      <li><a href="#">Computers, Tablets & Network Hardware</a></li>
      <li><a href="#">Video Games & Consoles</a></li>
      <li><a href="#">TV, Video & Home Audio Electronics</a></li>
      <li><a href="#">Home Telephones & Accessories</a></li> -->

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
            <a href="{{url('/womensClothing')}}">
              <div class="card text-center">             
              <img class="card-img-top" src="{{asset('images/fashion/women-cloths.jpg')}}" alt="product" style="width:100%; height:140px;">
              <div class="card-body">
                  <p class="card-title">Women's Clothing</p>
                </div>
              </div>
            </a>  
          </div>
          <div class="column">
            <a href="{{url('/womensShoes')}}">
              <div class="card text-center">
              <img class="card-img-top" src="{{asset('images/fashion/women-shoes.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Women's Shoes</p>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/mensClothing')}}">
              <div class="card text-center" >
              <img class="card-img-top" src="{{asset('images/fashion/men-cloths.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Men's Clothing</p>
                </div>
              </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/mensShoes')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/fashion/men-shoes.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Men's Shoes</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/mensAccessories')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/fashion/men-accessories.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Men's Accessories</p>
                </div>
                </div>
            </a>
          </div>
        </div>

        <div class="row" style="margin-top:40px">
          <div class="column">
            <a href="{{url('/womensBags')}}">
               <div class="card text-center">
               <img class="card-img-top" src="{{asset('images/fashion/women-bag.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Women's Bags & Handbags</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
            <a href="{{url('/kidsClothing')}}">
                <div class="card text-center">
                <img class="card-img-top" src="{{asset('images/fashion/kids-cloths.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Kids Clothing,Shoes & Accessories</p>
                </div>
                </div>
            </a>
          </div>
          <!-- <div class="column">
            <a href="{{url('/')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/fashion/jew.webp')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title"> Fine Jewelry</p>
                </div>
                </div>
            </a>
          </div>
          <div class="column">
              <a href="{{url('/')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/fashion/jew1.webp')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Jewelry</p>
                </div>
                </div>
              </a>
          </div> -->
          <div class="column">
              <a href="{{url('/watches')}}">
                <div class="card text-center" >
                <img class="card-img-top" src="{{asset('images/fashion/watch.jpg')}}" alt="product" style="width:100%; height:140px;">
                <div class="card-body">
                  <p class="card-title">Watches,Parts & Accessories</p>
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
