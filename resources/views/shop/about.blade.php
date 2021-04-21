@extends('layouts.master')

@section('css')
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
	<style>
	/* blockquote {
	    padding: 9px 22px;
	    margin: 0 0 22px;
	    font-size: 40px;
	    border-left: 4px solid black;
      height:70px;
      
	} */
   

	
#box {
  margin: 30px auto 0 auto;
  animation: appear 4s  ;
}
@keyframes appear {
  0% {
    transform: translate3d(-500px, 0px, 0px);
    opacity: 0;
  }
  50%{
    opacity: 0.2;
    transform: translate3d(-350px, 0px, 0px);
  }
  100%{
    opacity: 1;
    transform: translate3d(0px, 0px, 0px);
  }
}

#img {
	  /* background-image: url("{{asset('images/banners/air.jpg')}}"); */
	  background-repeat: no-repeat;
    background-size: 100% 100%;
    /* font-weight: bold; */
	  display: inline;
	  float: left;
	  height: 1500px;
	  padding: 118px 0;
	  text-align: center;
    width: 100%;
    /* opacity: 0.8; */
	}
	#img, h2 {

	  font-size: 35px;
	  /* font-weight: bold; */
	  text-align:center;
	  /* text-transform: uppercase; */
		font-family:Times;
		/* color: white; */
		 /* text-shadow: 0 0 5px #67D0F0; */
	}

	#img center {
		font-size: 21px;
		font-family:Times;
		/* color: white; */
		 /* text-shadow: 0 0 5px #67D0F0; */

		 
	}
	.pic{
		width:70%;
		height:400px;
	}
 
</style>
@endsection

@section('js')

@endsection

@section('content')
 
<div class="container" style="margin-top: 20px;">
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0" >
 				<center>	<h1 id='box'>
                    ABOUT <hr>
				    </h1></center>
			 			</div><br>
		</div><br><br>

<section class="img" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
	<center> 

  <div style="color:black; width:99%;  border-radius:5%; padding: 20px; ;text-align:left;	">
	{{-- <div style="color:black; width:80%;  border-radius:5%; padding: 20px;  border-style: dashed;text-align:left;	"> --}}
		<h3><b><u>e-Commerce</u></b></h3>
<p  style="color:black;font-size:22px;">
	e-commerce is the purchasing , selling & exchanging goods and
services over computer network or internet through which
transactions or terms of sale are performed electronically.
</p><br>

<h3><b><u>e-commerce vs. e-business</u></b></h3>
<p  style="color:black;font-size:22px;">
	• e-business to refer primarily to the digital enablement of
transactions and processes within a firm, involving information
systems under the control of the firm.<br>

• e-commerce include commercial transactions involving an
exchange of value across organizational boundaries

</p><br>



<h3><b><u>	Features of e-Commerce</u></b></h3>
<p  style="color:black;font-size:22px;">
• Ubiquity<br>
• Global reach<br>
• Universal standards<br>
• Social technology<br>
• Personalization & Customization<br>
• Information density<br>
• Interactivity<br>
• Richness

</p><br>

<h3><b><u>e-commerce: how it works</u></b></h3>
<p  style="color:black;font-size:22px;">
	
  <img class="responsive pic "src="{{asset('images/ab4.png')}}" alt="..."  > 

	 
</p><br>


<h3><b><u>Different types of e-Commerce</u></b></h3>
<p  style="color:black;font-size:22px;">
	• Business-to-business (B2B)<br>
• Business-to-Consumer (B2C)<br>
• Business-to-government (B2G)<br>
• Consumer-to-consumer (C2C)<br>
 
</p><br>
<h3><b><u>What is B2B e-commerce?</u></b></h3>
<p  style="color:black;font-size:22px;">
	• B2B e-commerce is simply defined as ecommerce between
companies. About 80% of e-commerce is of this type.
<br>
<img class="pic responsive"src="{{asset('images/ab3.png')}}" alt="..."  > 

 
</p><br>

<h3><b><u>What is B2C ecommerce?</u></b></h3>
<p  style="color:black;font-size:22px;">
	• Business-to-consumer e-commerce, or commerce between
	companies and consumers, involves customers gathering
	information; purchasing physical goods or receiving products
	
<br>

 
</p><br>
<h3><b><u>over an electronic network</u></b></h3>
<p  style="color:black;font-size:22px;">

<img class="pic responsive"src="{{asset('images/b5.png')}}" alt="..."  > 
<br></p><br>

<h3><b><u>What is B2G ecommerce</u></b></h3>
<p  style="color:black;font-size:22px;">
	• Business-to-government e-commerce or B2G is generally
defined as commerce between companies and the public
sector. It refers to the use of the Internet for public
procurement, licensing procedures, and other governmentrelated
operations


	
<br>
<img class="pic responsive"src="{{asset('images/ab2.png')}}" alt="..."  > 

 
</p><br>

<h3><b><u>What is C2C ecommerce?</u></b></h3>
<p  style="color:black;font-size:22px;">
	• Consumer-to-consumer e-commerce or C2C is simply
	commerce between private individuals or consumers.

<br>
<img class="pic responsive"src="{{asset('images/ab1.png')}}" alt="..."  > <br>

 
</p><br>
<h3><b><u>Advantages of e-Commerce</u></b></h3>
<p  style="color:black;font-size:22px;">
	• Faster buying/selling procedure, as well as easy to find
products.<br>
• Buying/selling @ 24/7.<br>
• More reach to customers, there is no theoretical geographic
limitations.<br>
• Low operational costs and better quality of services.<br>
• No need of physical company set-ups.<br>
• Easy to start and manage a business.<br>
• Customers can easily select products from different providers
without moving around<br>

<br>
 
 
</p><br>

<h3><b><u>Additional Points (Extra Points):-</u></b></h3>
<p  style="color:black;font-size:22px;">
	1) Grocery, Nutrition, seeds, cereals.<br>
2) Animals

	•   When used product upload from customer, admin will give permission, admin will decide gst Category, you want to creat all gst tax option.
	•   Hence you have done payment to crestokart you can chat with seller,this is only c2c
	

<br>
 
 
</p><br>



  
  </div>
  </div>
  <br>
  <br>

   
  <br>

   
  <br>
   

 </center>
</section>

@endsection
