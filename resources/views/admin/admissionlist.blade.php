@extends('layouts.dashboard')

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

	<div class="page-header">
			
					
		
				<center><strong style="font-size:25px;margin-left:230px;" >Addmissions</strong> </center>

	
	</div>
	<div class="container" style="max-width:87em;" >
		
		<a class="btn btn-primary btn-lg pull-right "style="background:#ffc20e;border-color:#ffc20e;float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="{{ url('/admin/admissions2') }}">Find Records</a>
	
	</div>
<br>
<?php
	use App\User;
	use App\Student;
	use App\Franchisee;
	?>
<div class="panel panel-default container" style="margin-right:50px;width:1050px;overflow:auto;padding-top:30px;">
    	<div class="panel-body row">
			<div class="col-md-12 ">
				<table id="example"class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr style="">
							<th>ID</th>
							<th>Student Name</th>
							<th>Franchisee Name</th>
							<th>Course Name</th>
							<th>Timetable</th>
							<th>Fee</th>
							<th>GST</th>
							<th>Discount</th>
							<th>Total Fee</th>
							<th>Admission Date</th>
							<th>Admission Receipt</th>
							<th>Delete Admission</th>
						</tr>  
					</thead>

					
					<tbody>
						@if($admissions != null)
							@foreach($admissions as $admission)
						
								
								<tr>
							
									<td>{{ $admission->id }}</td>							
									<td>
									<?php
										$student = Student::where('id',$admission->studnt_id)->first(); 
									?>	
									{{ $student->first_name }}  {{ $student->last_name }} 
									</td>
									<td>
									<?php
										$franchisee = Franchisee::where('id',$admission->franchisee_id)->first(); 
									?>	
									{{ $franchisee->first_name }}  {{ $franchisee->last_name }} 
									</td>
									<td>{{ $admission->course_name }}  </td>
									<td>{{ $admission->timetable }}</td>
									<td>{{ $admission->remark3 }}</td>  
									<td>{{ $admission->remark2 }}</td>
									<td>{{ $admission->remark4 }}</td>
									<td>{{ $admission->fee }}</td>
									<td>{{ $admission->admission_date }}</td>
									<td><a href="{{url('/student/course/'.$admission->id)}}" class="btn btn-primary" style="background:#ffc20e;border-color:#ffc20e;font-size:12px;">Download Receipt</a></td>
									<td><a href="{{url('/delete_Admission/'.$admission->id)}}" class="btn btn-danger" style="font-size:12px;" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
								</tr>
							@endforeach
						@endif
				
					</tbody>
				</table>
			</div>
		</div></div></div>
	<br>

 
	<div class="container" style="margin-left:30px; margin-bottom:30px;width:40%;float:right">

	</div>
	{{-- @include('partials.footer') --}}

@endsection