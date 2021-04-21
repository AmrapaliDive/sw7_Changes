@extends('layouts.master')



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
  
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
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
   padding: 16px 24px 24px 24px;
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
  background:#82ae46;
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
            if (e.keyCode == 40) changeQuantity(-1,this);
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



  <div class="container" style="margin-top:40px;">
  
  <center>
<div class="col-md-12" style="margin-top:1px; margin-bottom:30px;">
   
   <h2 style="color:black;"><strong>Furniture</strong></h2>
   </div>
  </center>
    </div>
    
  
    @if(Session::has('success'))
<div class="container" style="margin-top:150px;">
  <div class="row" >
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
  <div class="container-fluid">
<div class="col-md-12 " >

<div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/beds')}}">
                        <div class="box-img">
                           <img src="{{asset('images/furniture/beds.jpg')}}" alt=""  style="width:100%;height:180px;"/>
                           <h4>Beds & Mattresses</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/tables')}}">
                        <div class="box-img">
                        <img src="{{asset('images/furniture/tables.jpg')}}" alt="" style="width:100%;height:180px;"/>
                         <h4>Tables</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/chairs')}}">
                        <div class="box-img">
                        <img src="{{asset('images/furniture/chairs.jpg')}}" alt="" style="width:100%;height:180px;"/>
                         <h4>Chairs</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/sofa')}}">
                        <div class="box-img">
                        <img src="{{asset('images/furniture/sofa.jpg')}}" alt="" style="width:100%;height:180px;"/>
                         <h4>Sofas, Armchairs & Couches</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/desk')}}">
                        <div class="box-img">
                        <img src="{{asset('images/furniture/home office desk.jpg')}}" alt="" style="width:100%;height:180px;"/>
                        <h4>Home Office Desk</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/slipcovers')}}">
                        <div class="box-img">
                        <img src="{{asset('images/furniture/slipcover.jpg')}}" alt="" style="width:100%;height:180px;"/>
                        <h4>Slipcovers</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/bookcases')}}">
                        <div class="box-img">
                        <img src="{{asset('images/furniture/bookcases.jpg')}}" alt="" style="width:100%;height:180px;"/>
                        <h4>Bookcases & Shelving</h4> 
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/diningsets')}}">
                        <div class="box-img">
                          <img src="{{asset('images/furniture/diningsets.jpg')}}" alt="" style="width:100%;height:180px;"/>
                          <h4>Dining Sets</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/benches')}}">
                        <div class="Scrapbooking-img">
                           <img src="{{asset('images/furniture/Benches.jpg')}}" alt="" style="width:100%;height:180px;"/>
                           <h4>Benches, Stools & Bar Stools</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/tvStands')}}">
                        <div class="box-img">
                           <img src="{{asset('images/furniture/tvstand.jpg')}}" alt="" style="width:100%;height:180px;"/>
                           <h4>TV Stands & Entertainment Units</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/cupboards')}}">
                        <div class="box-img">
                           <img src="{{asset('images/furniture/cupboard.jpg')}}" alt="" style="width:100%;height:180px;"/>
                           <h4>Cabinets & Cupboards</h4>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="{{url('/furnitureParts')}}">
                        <div class="box-img">
                           <img src="{{asset('images/furniture/Furniture Parts.jpg')}}" alt="" style="width:100%;height:180px;"/>
                           <h4>Furniture Parts</h4>
                        </div>
                     </a>
                  </div>
                 
      </div>

</div>
<div>

</div>
   </div>  
@endsection
