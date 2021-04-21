@extends('layouts.master')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

@section('title')
Sw7
@endsection
@section('styles')
 <!-- <style>
  
  .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 25px;
    padding: 0 2px
    ;min-width: 35px;
    text-align: center;
}
.qty .plus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    }
.qty .minus {
    cursor: pointer;
    display: inline-block;
    vertical-align: top;
    color: white;
    width: 30px;
    height: 30px;
    font: 30px/1 Arial,sans-serif;
    text-align: center;
    border-radius: 50%;
    background-clip: padding-box;
}
div {
    text-align: center;
}
.minus:hover{
    background-color: #717fe0 !important;
}
.plus:hover{
    background-color: #717fe0 !important;
}
/*Prevent text selection*/
span{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
input{  
    border: 0;
    width: 2%;
}
nput::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input:disabled{
    background-color:white;
}
  </style> -->
  <style>
  
button{
	background-color:#2ab27b;
	color:white;
}
#bikini-display2, #bikini-display3, #bikini-display4 {
  display: none;
  position: relative;
  height: 409px;
}

@media (max-width: 1275px) {
  #bikini-display2, #bikini-display3, #bikini-display4  {
    display: none;
    position: relative;
    height: 375px;
  }
}

@media (max-width: 1150px) {
  #bikini-display2, #bikini-display3, #bikini-display4  {
    display: none;
    position: relative;
    height: 205px;
  }
}

#bikini-display1 {
  position: relative;
  height: 409px;
}

@media (max-width: 1275px) {
  #bikini-display1  {
    position: relative;
    height: 375px;
  }
}

@media (max-width: 1150px) {
  #bikini-display1  {
    position: relative;
    height: 325px;
  }
}

/* .bikini-product-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 10px;
  background-color: white;
  padding-top: 50px;
  padding-bottom: 50px;
  height: 1000px;
} */



.bikini-grid1 {
  grid-column-start: 0;
  grid-column-end: 0;
  position: relative;
  text-align: center;
  display: inline-block;
  padding-left: 10px;

}

.bikini-img-container {
  margin: auto;
  position: relative;
  display: inline-block;
}

.bikini-thumbnail {
  padding-top: 3px;
  padding-left: 3px;
  /* min-width: 494px; */
}

.bikini-thumbnail img {
  height: 100px;
}

@media (max-width: 1275px) {
  .bikini-thumbnail img  {
    height: 91.68px;
  }
}

@media (max-width: 1150px) {
  .bikini-thumbnail img  {
    height: 79.456px;
  }
}

.bikini-thumbnail img:hover {
  opacity:0.7;
  -moz-transform: scale(1.02);
  -webkit-transform: scale(1.02);
  transform: scale(1.02);
  cursor: pointer;

}


.thumbnail-clicked {
  border: 3px solid black;
}
select, option {
	font-family: 'FontAwesome';
	font-style: normal;
  align:center;
}
#gram{
  height:30px;
  border:1px solid rgba(0, 0, 0,0.1);
  border-radius:12px;
  background:white;
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
  -webkit-animation: 1s linear infinite condemned_blink_effect; // for Android
  animation: 1s linear infinite condemned_blink_effect;
  color:white;
	text-shadow: white 2px 2px 1px;
  font-family: 'Patua One', cursive;

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



#gridview {
    text-align: center;
}
#grid {
    margin-bottom: 30px;
}
#product-view{
  width:65%;
}
.quick_look {
    display: none;
    position: absolute;
    bottom: 20px;
    left: 50%;
    margin-left: -51px;
    background: transparent;
    border: #FFF 2px solid;
    padding: 8px 25px;
    color: #FFF;
    font-size: 14px;
    cursor: pointer;
}

.quick_look:hover {
    background: #FFF;
    color: #333;
}

.product-info {
    width:50%;
    padding: 0 30px 20px 20px;
    line-height: 1.5;
  
}

div.product-info ul {
    margin: 10px 0px;
    padding: 0;
}

div.product-info li {
    cursor: pointer;
    list-style-type: none;
    display: inline-block;
    color: #F0F0F0;
    text-shadow: 0 0 1px #666666;
    font-size: 14px;
}

div.product-info .selected {
    color: #e4a400;
    text-shadow: 0 0 5px #ffb900;
}

.product-title {
    font-size: 1.5em;
}

.product-category {
    margin: 20px 0px;
    font-size: 0.9em;
    color: #c4c4c5;
    text-transform: uppercase;
    border-left: #c4c4c5 3px solid;
    padding: 0px 5px 0px 5px;
    text-transform: uppercase;
}

button.btn-info {
    padding: 10px;
    margin: 20px 20px 10px 0px;
    padding: 10px 20px;
    background: #67bdf7;
    border: #60b2e8 1px solid;
    border-radius: 3px;
    color: #FFF;
}

.ui-widget-header {
    border: none !important;
    background: none !important;
}

#product-view {
    border: #CCC 1px solid;
    overflow: auto;
    display: inline-block;
    padding-top: 20px;
    margin-top: 30px;
    text-align: left;
}

div.preview-image img.thumbnail {
    width: 70px;
    margin-bottom: 20px;
    padding: 5px;
}

#thumbnail-container {
    width: 70px;
    cursor: pointer;
}

.focused {
    border: 1px solid #e77600 !important;
    box-shadow: 0 0 3px 2px rgba(228, 121, 17, .5);
}



#product-view {
    display: flex;
    flex-direction: row;
}

.preview-image {
    display: flex;
    flex-direction: row;
}


/* Responsive Styles */

@media screen and (min-width: 1224px) {
    div.image {
        width: 300px;
    }
}

@media screen and (min-width: 1044px) and (max-width: 1224px) {
    div.image {
        width: 300px;
    }
}

@media screen and (min-width: 845px) and (max-width: 1044px) {
    div.image {
        width: 200px;
    }
}

@media screen and (max-width: 560px) {
    #preview-enlarged {
        float: none;
    }
    #thumbnail-container {
        width: auto;
        margin-top: 10px;
    }
}

@media screen and (max-width:1080px) {
    #product-view {
        display: flex;
        flex-direction: column;
    }
    .product-info {
      width: 98%;
    }
    div.preview-image {
        flex-direction: column-reverse;
        width:98%;
    }
    #thumbnail-container {
        display: flex;
        padding: 10px 0;
    }
    #preview-enlarged {
      margin-left:-40px;
   }
}

@media screen and (max-width:768px) {
    div.preview-image {
        padding: 10px;
    }
    .product-info {
        padding: 10px 0;
    }
    #product-view{
        width:100%;
    }
}

.thumbnail {
    margin-top: 10px
}

.thumbnail img {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 1px solid #eee;
    padding: 5px;
    cursor: pointer;
    border-radius: 4px
}

.thumbnail img:hover {
    border: 1px solid #00000059
}

 </style>
  
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

function init() {
	document.getElementById("clickMe1").addEventListener("click", function() {
		document.getElementById("bikini-display1").style.display = "block";
		document.getElementById("bikini-display3").style.display = "none";
		document.getElementById("bikini-display4").style.display = "none";
		document.getElementById("bikini-display2").style.display = "none";
	});

	document.getElementById("clickMe2").addEventListener("click", function() {
		document.getElementById("bikini-display2").style.display ="block";
		document.getElementById("bikini-display1").style.display ="none";
		document.getElementById("bikini-display3").style.display ="none";
		document.getElementById("bikini-display4").style.display ="none";
	
	});

	document.getElementById("clickMe3").addEventListener("click", function() {
		document.getElementById("bikini-display3").style.display ="block";
		document.getElementById("bikini-display1").style.display ="none";
		document.getElementById("bikini-display4").style.display ="none";
		document.getElementById("bikini-display2").style.display ="none";
	});

	document.getElementById("clickMe4").addEventListener("click", function() {
		document.getElementById("bikini-display4").style.display ="block";
		document.getElementById("bikini-display1").style.display ="none";
		document.getElementById("bikini-display3").style.display ="none";
		document.getElementById("bikini-display2").style.display ="none";
	});
}
init();

$(".bikini-thumbnail img").click(function() {
	//Remove the my-list--selected class from any elements that already have it
	$('.thumbnail-clicked').removeClass('thumbnail-clicked');
	//Add the .border-bottom class back to any element that is missing it
	$('.thumbnail-clicked').addClass('bikini-thumbnails');
	//Add the my-list--selected class to the clicked element
	$(this).addClass('thumbnail-clicked');
	//Remove the border-bottom class from the clicked element
	$(this).find('.bikini-thumbnails').removeClass('bikini-thumbnails');
  });
</script>

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
        var gram = parseInt($(obj).parent().parent().find('.gram').val());
            //alert(gram);
            if(gram<=0)
                {
                  swal("Please select quantity!");
                }
             if(gram>0)
             {
            //$("#quantity").val( parseInt($("#quantity").val())+num);
			      console.log(obj);
            var value_to_set = parseInt($(obj).parent().find('.qty').val())+num;
            if(value_to_set<0){$(obj).parent().find('.qty').val(0);return;}
            $(obj).parent().find('.qty').val( value_to_set);
             }
        }

        $('.gram').on('change',function(){
          calculate(this);
        });

  function calculate(obj){
    var gram = parseInt($(obj).parent().parent().find('.gram').val());
    if(gram<=0)
                {
                  swal("Please Select How many gram!!!");
                  
                  var value_to_set= 1;
                  $(obj).parent().find('.qty').val(value_to_set);
                }
    
      else
      {
      
      var price = parseFloat($(obj).parent().parent().parent().find('.amount').val()) || 0;
     
      console.log(price);
     var quantity = parseInt($(obj).parent().parent().find('.qty').val());
     var gram = parseInt($(obj).parent().parent().find('.gram').val());
    //alert(quantity);
    
      var q= sessionStorage.setItem("quantity", quantity);
      var g= sessionStorage.setItem("gram", gram);
      var p=sessionStorage.setItem("price", price);
      //console.log(q);
      var total = (price *  (gram/1000))*quantity;
     //alert(total);    
     
     $(obj).parent().parent().parent().find('.card__by').text(total);

     var id= parseInt($(obj).parent().parent().parent().find('.qty').val());
      }

      var quantity = parseInt($(obj).parent().find('.qty').val());

if(quantity < 1){
     
          parseFloat($(obj).parent().parent().find('.submit').attr('disabled','true'));
          }
          else
          {
           parseFloat($(obj).parent().parent().find('.submit').removeAttr('disabled'));
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
	 swal("Please Select Quantity!!!");
	 var total = parseInt($(".icart").text()); 
		//var total = $(".icart").text()); 
            console.log(total);
            total--;  
            $(".icart").text(total);    
			//console.log(total);
	 return;
 }
console.log(id);
callToAjax(id,qty,gram,amount);
swal("Hey", "Product Added to Cart Successfully!!!", "success");
}

function callToAjax(id,qty,gram,amount)
{
    
  $.ajax({
  url: "{{URL::to('/add-to-cart')}}" + '/'+id+'/'+qty+'/'+gram+'/'+amount,
  type: 'get',
  dataType: 'json',
  success: function(response){
	console.log(response.cart);
}
});

}
</script>
 
<script>
function change_image(image){
var image_container = document.getElementById("main-image");


image_container.src = image.src;

}
</script>
@endsection

@section('content')
<div class="container" style="margin-top:50px;border:1px solid lightgray;background-color:white;border-radius:12px;box-shadow: 4px 4px 4px 1px rgba(0,0,0,0.5);margin-bottom:80px;">	

  <div class="col-md-12"style="min-height:none;" >


  <div class="col-md-6 ">
  <br>
  <div class="text-center p-4"> 
       <img id="main-image" src="{!!  URL::to('images/storage/batches/',array($batch->course_image)) !!}" width="300" />
        </div>
        <div class="thumbnail text-center" style="border:none;">
        @if($batch->batch_image1!=="NA")
         <img onclick="change_image(this)" src="{!!  URL::to('images/storage/batches/',array($batch->batch_image1)) !!}" width="70">
         @endif

         @if($batch->batch_image2!=="NA")
 <img onclick="change_image(this)" src="{!!  URL::to('images/storage/batches/'.$batch->batch_image2) !!}" width="70">
 @endif
           
           <img onclick="change_image(this)" src="{!!  URL::to('images/storage/batches/'.$batch->course_image) !!}" width="70">
            </div>
      	</div>

  <div class="col-md-6" style="padding-left:0px">
  <?php
           Use App\Franchisee;
           Use App\User;
          $user = User::where('id',$batch->user_id)->first();
          $franchisee = Franchisee::where('user_id',$user->id)->first();
          ?>
        
   <p style="font-family:Times New Roman, Times, serif; font-size:25px; color:black;"><b>{{ $batch->batch_name }}, {{ $franchisee->city }}</b></p>
   <h1 style="text-transform: capitalize;"><b>{{ $batch->title }}</b></h1>
    <!-- <b class="pull-right" style="font-size:16px;">Discount : {{ $batch->discount }} %</b></span> -->
 
            <h4><b style="color:black; font-family:Times New Roman, Times, serif;font-size:20px;"><b>Available at Price &#8377;:</b>
           
            <span  class="card__by" id="card__by" name="card__by">{{ $batch->course_final_fee }} (Including GST )</span> </b></h4>
           <span style="font-family:Georgia, serif;color:black;font-size:16px;"><b> Discount &#8377;:</b> {{ $batch->discount }}  <br><br></span>
             <input type="hidden" name="amount" id="amount"  value="{{ $batch->course_final_fee }}"  class="amount"/> 
             <input type="hidden" name="pid" id="pid"  value="{{ $batch->id }}"  class="pid"/>     
             </a> 
           
		<hr>
   Teacher Name : {{$batch->teacher_name}}<br><br>
  Course Duration : {{$batch->course_duration}}<br><br>
  Seats Available : {{$batch->seats_available}}<br><br>
  Time Table : {{$batch->timetable}}<br><br>
  Syllabus : {{$batch->syllabus}}<br><br>
  Download Syllabus : <a href="{{asset('/images/storage/batches/'.$batch->syllabus_pdf)}} " download>Download</a>
<div class="" style="margin-top:20px;">
          <!-- <button type="submit"  style="margin-bottom:20px;width:50%;height:80%;" class="btn btn-primary submit" name="submit" id="submit" onclick="addToCart({{$batch->id}})">Add To Cart</button>  -->
          @if(Auth::check() && (Auth::user()->role =="student"))
          <!-- <a class="btn btn-primary pull-right" href="{{url('/enrolForAdmission/'.$batch->id)}}">Enrol To Batch</a> -->
          <a class="btn btn-primary pull-right" href="{{url('/getcourseAdmission/'.$batch->id)}}">Register Now</a>
              @else
              <!-- <a class="btn btn-primary pull-right" href="{{url('/enrolForAdmission/'.$batch->id)}}">Enrol To Batch</a> -->
              <a class="btn btn-primary pull-right" href="{{url('/getcourseAdmission/'.$batch->id)}}">Register Now</a>
              @endif
     </div>
     
    
		</div>
    <h4 style="font-size:16px;font-family:Georgia, serif;color:black;"><b>Description : </b></h4>
     <p style="text-align:justify;margin-top:5px;"> {!! $batch->description !!}</p>
     
    </div>
    
</div><br>

@endsection
