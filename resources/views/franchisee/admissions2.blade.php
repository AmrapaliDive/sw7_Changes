@extends('layouts.print')

@section('title', ' Admissions')
@section('meta')

@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
	
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

	</script>
	<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>
@endsection
<style>

</style>

@section('content')

@if(session('success'))
<div class="container col-md-6 offset-md-4" style="padding-top:10px;margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> {{ session('success') }}
		</div>
		</div>
	@endif
	@if(session('danger'))
	<div class="container col-md-6 offset-md-4">
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
		</div>
	@endif

	
	<div class="container printClass" >
	<!-- <a class="btn btn-primary btn-lg pull-left "style="float:right;width:200px;margin:10px;margin-top:25px;font-size:1.4rem" href="{{ url('/franchiseelist') }}">Back</a> -->
	<!-- <h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>Admissions</strong> </center></h3><hr style=""> -->

		<!-- <a class="btn btn-primary btn-lg pull-right "style="float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="{{ url('/admin/admissions2') }}">Find Records</a> -->
		<form style="" action="{{url('/franchisee/admission/records')}}" method="POST">
		{{ csrf_field() }}
	<div class="col-md-4" style="margin-top:30px;">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Start Date</label>
				<input type="date"id="start_date" style="font-size:1.5rem;" class="form-control"  name="start_date"  required autofocus >
            </div>
            </div>
            <div class="col-md-4" style="margin-top:30px;">
            <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;End Date</label>
				<input type="date"id="end_date" style="font-size:1.5rem;" class="form-control"  name="end_date"  required autofocus >
            </div>
			</div>
			<div class="col-md-2" style="margin-top:30px;">
            <div class="form-group">
			<button type="submit" class="btn btn-primary" style="width:200px;height:30px;font-size:15px;margin-top:30px;" name="submit">Find Records</button>
            </div>
			</div>
			
	</form>

	
	<br>

	</div>
<br>
<!-- <a class="btn btn-primary btn-lg pull-left "style="float:right;width:200px;margin:10px;margin-top:25px;font-size:1.4rem" href="{{ url('/franchiseelist') }}">Back</a> -->
<?php
	use App\User;
	use App\Student;
	use App\Franchisee;
	?>
<!-- <div class="panel panel-default container" style="overflow:auto;padding-top:30px;"> -->
    	<div class="panel-body row ">
		<h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>SW7 INFOMEDIA PRIVATE LIMITED</strong> </center></h3><hr style="">
		<h6 class="" style=margin-top:20px;"><center><strong>Contact Number : +91 7030023002</strong> </center></h6>
	<h6 class="" style=margin-top:20px;"><center><strong>Office Address : Office Address : Rahatani Link Rd, 
			Dagadu Patil Nagar, 
			Thergaon,Pimpri-Chinchwad, 
			Maharashtra 411017,India</strong> </center></h6><hr style="">
	<h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>Admissions Report</strong> </center></h3><hr style="">
	
			<div class="col-md-12 " style="overflow:auto;">
				<table id=""class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr style="">
				
							<!-- <th>ID</th> -->
							<th>Student Name</th>
							<!-- <th>Franchisee Name</th> -->
							<th>Course Name</th>
							<th>Admission Date</th>
							<!-- <th>Timetable</th> -->
							<th>Fee</th>
							<th>GST</th>
							<th>Discount</th>
							<th>Total</th>
						
							
							<!--<th>Discount</th>
							<th>Total Fee</th> -->
							
							<!-- <th>Admission Receipt</th> -->
							
						</tr>  
					</thead>

					
					<tbody>
						@if($admissions != null)
						<?php   $total = 0; $gst_total = 0; $subtotal=0; $discountTotal=0;?>
							@foreach($admissions as $admission)
						
								
								<tr>
								<?php
									$total = $total + $admission->fee;
									$gst_total = $gst_total +  $admission->remark2 ;
									$subtotal = $subtotal + $admission->remark3;
									$discountTotal = $discountTotal + $admission->remark4;
								?>
									<!-- <td>{{ $admission->id }}</td>							 -->
									<td>
									<?php
										$student = Student::where('id',$admission->studnt_id)->first(); 
									?>	
									{{ $student->first_name }}  {{ $student->last_name }} 
									</td>
									<!-- <td>
									<?php
										$franchisee = Franchisee::where('id',$admission->franchisee_id)->first(); 
									?>	
									{{ $franchisee->first_name }}  {{ $franchisee->last_name }} 
									</td> -->
									<td>{{ $admission->course_name }}  </td>
									<td>{{ $admission->admission_date }}</td>
									<!-- <td>{{ $admission->timetable }}</td> -->
									
									<td>{{ $admission->remark3 }}</td> 
									<td>{{ $admission->remark2 }}</td>
									 <td>{{ $admission->remark4 }}</td>
									<td>{{ $admission->fee }} </td>  
									
									<!--<td>{{ $admission->fee }}</td> -->
								
									<!-- <td><a href="{{url('/student/course/'.$admission->id)}}" class="btn btn-primary">Download Receipt</a></td> -->
								</tr>
							@endforeach
						@endif
				
					</tbody>
					</table>
					<table id=""class="table table-striped table-bordered" style="">
					@if($total !=null )
						<tr>
						<td><strong><b>Sub Total (&#8377;) :</b></strong></td>
					    <td ><strong><b> {{$subtotal}} </b></strong></td>
						</tr>
						<tr>
						<td ><strong><b>GST Total (&#8377;) :</b></strong></td>
						<td ><strong><b> {{$gst_total}}</b></strong></td>
						</tr>
						<tr>
						<td ><strong><b>Discount Total (&#8377;) :</b></strong></td>
						<td ><strong><b> {{$discountTotal}}</b></strong></td>
						</tr>
						<tr>
						<td><strong><b>Total (&#8377;) :</b></strong></td>
					    <td ><strong><b> {{$total}}</b></strong></td>
						</tr>
					
					@endif
					</table>
				
			</div>
		</div>
		<!-- <div class="pull-right" style="magin-right:25px;"> 
		<b>
			Contact Number : +91 7030023002<br><br>
			Office Address : Rahatani Link Rd, <br>
			Dagadu Patil Nagar, <br>
			Thergaon,Pimpri-Chinchwad, <br>
			Maharashtra 411017,India
			</b>
	</div>	 -->
		</div>
		<!-- </div> -->
		
	<br>

	<div id="print1" style="">
	
	<input type="button" value="Print" class="btn btn-primary" onclick="myFunction();window.location.reload();" class="form-control"><br><br>
	<a class="btn btn-primary btn-lg pull-left "style="float:right;width:200px;margin:10px;margin-top:25px;font-size:1.4rem" href="{{ url('/franchisee_account') }}">Back</a>
	</div>

	</div>
	{{-- @include('partials.footer') --}}

@endsection

<script>

function myFunction() {
    var clear = document.getElementsByClassName("printClass");
    for (let index = 0; index < clear.length; index++) {
        clear[index].innerHTML="";
        
    }
    document.getElementById("print1").innerHTML="";
    window.print();
}
</script>