@extends('layouts.student_dashboard')

@section('title', ' Manage Admissions')
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

	
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html"></a></li>
				<li class='active'></li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
	<h3  style="font-size:30px;margin-top:20px;"><center><strong>Addmissions</strong> </center></h3><hr style="margin-left:95px;">
	</div>
<br>
<?php
	use App\User;
	use App\Student;
	use App\Franchisee;
	?>
<div class="panel panel-default container" style="margin-right:60px;width:1000px;overflow:auto;padding-top:30px;">
    	<div class="panel-body row">
			<div class="col-md-12 ">
				<table id="example"  class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr style="color:Black;">
							<th>ID</th>
							<!-- <th>student id</th> -->
							<th>Franchisee Name</th>
							<th>course name</th>
							<th>timetable</th>
							<th>timeslot</th>
							<th>fee</th>
							<th>Admission Date</th>
							 <th>Download </th>
							<!--<th>Delete</th> -->
							<!-- <th>Description</th> -->
							<!-- <th>Image1</th>
							<th>Image2</th>
							<th>Image3</th> -->
						</tr> 
					</thead>

					<tbody>
						@if($admissions != null)
							@foreach($admissions as $admission)
								<tr>		
									<td>{{ $admission->id }}</td>							
									<!-- <td>{{ $admission->studnt_id }}</td> -->
									<td>
									<?php
										$franchisee = Franchisee::where('id',$admission->franchisee_id)->first(); 
									?>
									{{ $franchisee->first_name }}  {{ $franchisee->last_name }} 
									</td>
									<td>{{ $admission->course_name }}</td>
									<td>{{ $admission->timetable}}</td>
									<td>{{ $admission->timeslot }}</td>
									<td>{{ $admission->fee }}</td>
									<td>{{ $admission->admission_date }}</td>
									 <td><a href="{{url('/student/course/'.$admission->id)}}" class="btn btn-primary">Download Bill</a></td>
									<!-- <td>{{ $admission->path }}</td>
									<td>{{ $admission->path2 }}</td>
									<td>{{ $admission->path3 }}</td> -->

								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div></div></div>
	<br>

 	
</div>
</div>

	
	

@endsection