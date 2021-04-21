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
     
			.btn{
				background-color:orange;
				color:white;
				font-size:15px;
				border-radius:10px;
			}
            </style>
        
        </head>

        <body >
    <center>
    <h1 style= color:black; ><b><u>SW7 INFOMEDIA PRIVATE LIMITED</u></b></h1>
    <span>GST Number : </span><br>
    <span>Rahatani Link Rd, Dagadu Patil Nagar, Thergaon,Pimpri-Chinchwad, Maharashtra 411017,India</span><br>
    <!-- <span>Pimpri-Chinchwad City, Pune - 411033. </span><br> -->
    <span>Website : www.sw7infomedia.com</span><br>
    <span>Email : support@sw7infomedia.com</span><br>
    <span>Customer Care : +91 7030023002 </span><br>
    </center>
    
    </center><hr style="color: black;">
  
	<h4>&nbsp;&nbsp;&nbsp;&nbsp;Your Application is  Submitted!! Thank You for Enrollment! Our Team will contact you soon !</h4><br>
    <h4>&nbsp;&nbsp;&nbsp;&nbsp;For Any Queries call us on : +91 7030023002</h4>


<div class="table"  style="overflow-x:auto;">
    <div class="col-md-12 col-sm-12">
  <h2 style= color:black; >&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Your Details </u></b></h2>
        <table  align="left" class="table table-bordered table-responsive"  style="border:solid black 2px;border-collapse:collapse; text-align:center;width:450px; font-size:24;"  border=" ">
       
            <tr>
                <th  style="color:black; font-size:15px;height:40px;" > Name  </thbgcolor="#000000">
                <td ><?php echo e($franchisee->first_name); ?>  <?php echo e($franchisee->last_name); ?></td>
            </tr>
            <tr>
                <th  style="color:black; font-size:15px;height:40px;" >Email </thbgcolor="#000000">
                <td ><?php echo e($franchisee->email); ?></td>
            </tr>  

            <tr>
                <th  style="color:black; font-size:15px;height:40px;" > Date of birth </thbgcolor="#000000">
                <td ><?php echo e($franchisee->dob); ?></td>
            </tr>   

            <tr>    
                <th  style="color:black; font-size:15px;height:40px;" >Contact Number 1</thbgcolor="#000000">
                <td ><?php echo e($franchisee->contact1); ?></td>
            </tr>
            <tr>
                <th  style="color:black; font-size:15px;height:40px;" > Contact Number 2 </thbgcolor="#000000">
                <td ><?php echo e($franchisee->contact2); ?></td>
            </tr>
            <tr>    
                <th  style="color:black; font-size:15px;height:40px;" >Landline Number</thbgcolor="#000000">
                <td ><?php echo e($franchisee->landline_no); ?></td>
             </tr>
             <tr>   
                <th  style="color:black; font-size:15px;height:40px;" >Qualification</thbgcolor="#000000">
                <td ><?php echo e($franchisee->qualification); ?></td>
             </tr> 

             <tr>  
                <th  style="color:black; font-size:15px;height:40px;" >Office Time </thbgcolor="#000000">
                <td ><?php echo e($franchisee->office_time); ?></td>
            </tr>
            <tr>
                <th  style="color:black; font-size:15px;height:40px;" >Contact Person Name </thbgcolor="#000000">
                <td ><?php echo e($franchisee->contact_person); ?></td>
            </tr>   
            <tr>
                <th  style="color:black; font-size:15px;height:40px;" >Contact Pserson Contact No.</thbgcolor="#000000">
                <td ><?php echo e($franchisee->contact_person_contact); ?></td>
            </tr>
    </table>

</div>
</div>

 

<!-- <center><a href="<?php echo e(url('/franchisee/agreement/'.$franchisee->id)); ?>" class="btn btn-primary">Download Agreement</a></center> -->
<br><br>Thank You,
    <br>SW7 INFOMEDIA PRIVATE LIMITED,
    <br>Rahatani Link Rd, <br>
Dagadu Patil Nagar, <br>
Thergaon,Pimpri-Chinchwad, <br>
Maharashtra 411017,India
</body>
 




