<!-- <!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://fontawesome.com/">
    <style>
            p.solid {border-style: solid; }
            
           p.round3 {
  border: 2px solid black;
  border-radius: 12px;
  width: 190px;
  height: 20px;
  padding:5px;
}
        h2 {
              text-shadow: 2px 2px 5px black
            }
			.btn{
				background-color:orange;
				color:white;
				font-size:15px;
				border-radius:10px;
			}
            </style>
        
        </head>

        <body style="background-color:#f7f2f2;width:900px; margin:30px;" >
    <center>
    <h1 style= color:black ><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></h1>
    <span>GST Number : </span><br>
    <span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
  
    <span>Website : www.sw7infomedia.com</span><br>
    <span>Email : support@sw7infomedia.com</span><br>
    <span>Customer Care : +91 7030023002 </span><br>
    </center>
    
    </center><hr style="color: black;">
    <h3><strong>Bill To,<br> {{ $name  }} </h3></strong>
    <strong>Address : </strong>{{$address}}
    
	<h4>&nbsp;&nbsp;&nbsp;&nbsp;Thank You for Ordering! Here are your Order details:</h4>

<div class="table" align="center"  style="overflow-x:auto;">
    <div class="col-md-12 col-sm-6">
    <center><h2 style= color:black ><b><u> Order </u></b></h2></center>
        <table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:900px; font-size:24;"  border=" ">
        <thead>
            <tr height="40">
                <th  style="color:black; font-size:15px;" >Sr. No. </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Product </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Per Unit MRP Price </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >GST (%) </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Per Unit Discount </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Per Unit Sold Price</thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" > Cart Description </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Quantity</thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Total Price</thbgcolor="#000000">
               
                
                
</tr>
<?php 
$i=1;
$sum=0;
?>
@foreach($itemname as $item)
<tbody>
      <tr>
      <td >{{$i++}}</td>
      <td >{{$item['item']['product_name']}}</td>
      <td >{{$item['item']['mrp']}}</td>
      <td >{{$item['item']['gst']}}</td>
      <td >{{$item['item']['discount']}}</td>
      <td >{{$item['item']['price']}}</td>
      <td >{{$item['desc']}}</td>
      <td >{{$item['qty']}}
     <?php
     $sum = $sum + $item['qty'];
     ?>
      </td>
      <td >&#8377; {{$item['price']}}</td>
      
      </tr>
</tbody>

@endforeach
<tfoot>
    <tr>
         <td colspan="8" ><strong><b>Total Quantity</b></strong></td>
        <td ><strong><b>{{ $sum }}</b></strong></td>
    </tr>
    <tr>
         <td colspan="8" ><strong><b>Total Price</b></strong></td>
        <td ><strong><b>&#8377; {{$total }}</b></strong></td>
    </tr>
 
    
    </tfoot>            
</thead>

</table><br><br>

</div>
</div>

<br><br>Thank You,
    <br>SW7 INFOMEDIA PRIVATE LIMITED,
    <br>Rahatani Link Rd, <br>
Dagadu Patil Nagar, <br>
Thergaon,Pimpri-Chinchwad, <br>
Maharashtra 411017,India
</body> -->

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://fontawesome.com/">
    <style>
            p.solid {border-style: solid; }
            
           p.round3 {
  border: 2px solid black;
  border-radius: 12px;
  width: 190px;
  height: 20px;
  padding:5px;
}
        h2 {
              text-shadow: 2px 2px 5px black
            }
			.btn{
				background-color:orange;
				color:white;
				font-size:15px;
				border-radius:10px;
			}
            </style>
        
        </head>

        <body style="background-color:#f7f2f2;width:900px; margin:30px;" >
    <center>
    <h1 style= color:black ><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></h1>
   
    <span>GST Number : </span><br>
    <span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
    <span>Website : www.sw7infomedia.com</span><br>
    <span>Email : support@sw7infomedia.com</span><br>
    <span>Customer Care : +91 7030023002 </span><br>
    </center>
    
    </center><hr style="color: black;">
    <!-- <h3><strong>Bill To,<br>  </h3></strong>
    <strong>Address : </strong> -->

    <div class="table" align="center"  style="overflow-x:auto;">
                <div class="col-md-12 col-sm-6">
                    <table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:900px; font-size:24;"  border=" ">
                    <thead>
                    <tr height="40" >
                            <th  style="color:black; font-size:15px;" > State : Maharashtra</thbgcolor="#000000">
                            <th  style="color:black; font-size:15px;" > State Code : 27</thbgcolor="#000000">
                    </tr>
        </thead>
</table>
</div>
</div>
    <br>
    <div class="table" align="center"  style="overflow-x:auto;">
                <div class="col-md-12 col-sm-6">
                <center> <h2 style= color:black ><u>Tax Invoice</u></h2></center>
                    <table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:900px; font-size:24;"  border=" ">
                    <thead>
                   
                        <tr height="40" >
                            <th  style="color:black; font-size:15px;" > Customer Name : {{ $name  }}</thbgcolor="#000000">
                           
                                           
                        <th  style="color:black; font-size:15px;">Order/Proforma Invoice No :{{$order->id}} </th>
                         
                                              
                        </tr>

                        <tr height="40">
                        <th style="color:black; font-size:15px; ">Address : {{$address}}</th>
                       
                        <th  style="color:black; font-size:15px;">P. O. No : </th>
                           
                        </tr>                     
                      
                        <tr height="40"> 
                        <th style="color:black; font-size:15px; ">GSTIN : </th>
                         
                       
                        <th style="color:black; font-size:15px; ">Date :{{ $order->created_at->format('d-m-Y') }} </th>
                          
                        </tr>

 
</thead>
</table>
</div>
</div>
<br><br>
	<!-- <h4>&nbsp;&nbsp;&nbsp;&nbsp;Thank You for Ordering! Here are your Order details:</h4> -->

<div class="table" align="center"  style="overflow-x:auto;">
    <div class="col-md-12 col-sm-6">
  
        <table class="table table-bordered table-responsive" style="border:solid black 2px;border-collapse:collapse; text-align:center;width:900px; font-size:24;"  border=" ">
        <thead>
            <tr height="40">
                <th  style="color:black; font-size:15px;" >Sr. No. </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Product </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Per Unit MRP Price </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >GST (%) </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Per Unit Discount </thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Per Unit Sold Price</thbgcolor="#000000">
                <!-- <th  style="color:black; font-size:15px;" > Cart Description </thbgcolor="#000000"> -->
                <th  style="color:black; font-size:15px;" >Quantity</thbgcolor="#000000">
                <th  style="color:black; font-size:15px;" >Total Price</thbgcolor="#000000">
               
                
                
</tr>
<?php 
$i=1;
$sum=0;
?>
@foreach($itemname as $item)
<tbody>
      <tr>
      <td >{{$i++}}</td>
      <td >{{$item['item']['product_name']}}</td>
      <td >{{$item['item']['mrp']}}</td>
      <td >{{$item['item']['gst']}}</td>
      <td >{{$item['item']['discount']}}</td>
      <td >{{$item['item']['price']}}</td>
      <!-- <td >{{$item['desc']}}</td> -->
      <td >{{$item['qty']}}
     <?php
     $sum = $sum + $item['qty'];
     ?>
      </td>
      <td >&#8377; {{$item['price']}}</td>
      
      </tr>
</tbody>
@endforeach
<tfoot>
    <tr>
         <td colspan="7" ><strong><b>Total Quantity</b></strong></td>
        <td ><strong><b>{{ $sum }}</b></strong></td>
    </tr>
    <tr>
         <td colspan="7" ><strong><b>Net Amount</b></strong></td>
        <td ><strong><b>&#8377;{{$total }}</b></strong></td>
    </tr>
   
    <tr>
         <td colspan="4" ><strong><b>Declaration :<br>
         We Declare that this invoice shows the actual price of the goods described and that all particulars are true and correct.
         </b></strong></td>
         <td colspan="4" ><strong><b>&nbsp;&nbsp;&nbsp;<br><br>This is computer generated copy, Hence not signed.</b></strong></td>
    
         <!-- <td colspan="2" ><strong><b>&nbsp;&nbsp;&nbsp;<br><br>Autherized signatory</b></strong></td> -->
        
    </tr>
 
    </tfoot>            
</thead>

</table><br><br>

</div>
</div>


<br><br>Thank You,
    <br>SW7 INFOMEDIA PRIVATE LIMITED,
    <br>Rahatani Link Rd, <br>
Dagadu Patil Nagar, <br>
Thergaon,Pimpri-Chinchwad, <br>
Maharashtra 411017,India
</body>
 





 




