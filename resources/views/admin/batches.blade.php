@extends('layouts.dashboard')


@section('title', 'Batches')
@section('meta')

@endsection

@section('styles')
	<style>
	
	</style>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"/>
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

@section('content')

@if(session('success'))
	<div class="container col-md-6 offset-md-4" style="padding-top:30px;margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> {{ session('success') }}
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
					<div class="page-header row">
					<!-- <a class="panel-heading"class="btn btn-primary" style="font-size:20px;width:50px; height:50px;background-color:#2ab27b;color:white;border-color:#2ab27b;margin-left:230px;" href="{{ url('admin/') }}" ><b><</b></a>  -->
					
					<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Manage Batches</strong> </center></h3>
		
		          </div>
				  <center><div>
				  <a class="btn btn-primary " style="font-size:20px;width:40px;margin-left:250px;background:#ffc20e;color:#b60a0a;border-color:#ffc20e;" href="{{ url('/franchiseelist') }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg></a>
				  </div></center>
	
	<br>
</div>

	<?php
	use App\User;
	use App\Franchisee;
	?>
	
	<div class="panel panel-default container" style="margin-left:265px;width:1090px;overflow:auto;padding-top:30px;">
            <div class="panel-body row">
			<div class="col-md-12"> 
				<table id="example" class="table table-hover">
					<thead>
						<tr style="">
							<th>ID</th>
							<th>Batch Name</th>
							<th>teacher name</th>
							<th>Syllabus</th>
							<th>Timetable</th>
							<th>Seats Available</th>
							<th>fee</th>
							<th>GST(%)</th>
							<th>Discount</th>
							<th>Final Fee</th>
							<th>course_duration</th>
							<th>Change Status</th>
							<th>Action</th>
							<th>View Admissions</th>
							<th>Edit Batch</th>
							<!-- <th>Edit</th>
							<th>Delete</th> -->
						</tr> 
					</thead>

					<tbody>
						@if($batches != null)
							@foreach($batches as $batch)
								<tr>
								<?php
								$user = User::where('id',$batch->user_id)->first(); 
								?>		
									<td>{{ $batch->id }}</td>							
									<td>{{ $batch->batch_name }}  </td>
									<td>{{ $batch->teacher_name }}</td>
									<td>{{ $batch->syllabus}}</td>
									<td>{{ $batch->timetable}}</td>
									<td>{{ $batch->seats_available }}</td>
									<td>{{ $batch->fee }}</td>
									<td>{{ $batch->gst }}</td>
									<td>{{ $batch->discount }}</td>
									<td>{{ $batch->course_final_fee }}</td>
									<td>{{ $batch->course_duration }}</td>
								
									
									<td style="max-width:100px;">
								
									
											<form  method="post" action =" {{ url('/admin/update_batch_status/'.$batch->id) }}">
											{{ csrf_field() }}
													<div class="form-group">
														<!-- <label class="control-label" style="font-size:20px" for="title">Status</label> -->
														
											@if(isset($batch))
											<select  class="form-control" style="width:110px;height:30px;font-size:1.4rem" id="status" name="status">
											<option style="font-size:1.4rem" value="Accepted" {{ $batch->status === 'Accepted' ? 'Accepted' : '' }}>Accepted</option>
											<option style="font-size:1.4rem" value="Block" {{ $batch->status === 'Block' ? 'selected' : '' }}>Block</option>
											<option style="font-size:1.4rem"value="Pending" {{ $batch->status === 'Pending' ? 'selected' : '' }}>Pending</option>
											</select>
											@else
										@endif
										</td >			
										<td >
															<button type="submit" class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#ffc20e;color:#b60a0a;border-color:#b60a0a;" >Change</button>
										</td >	
										<td >
															<a href="{{url('/admin/admissions/'.$batch->id)}}" class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#ffc20e;color:#b60a0a;border-color:#b60a0a;" >Admissions</a>
										</td >		
										<td >
															<a href="{{url('/admin/batch/edit/'.$batch->id)}}" class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;" >Edit</a>
										</td >				
									</form>	
											
														 
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection

