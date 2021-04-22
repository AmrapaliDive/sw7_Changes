@extends('layouts.dashboard')

@section('title', 'Hostel')
@section('meta')

@endsection

@section('styles')
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



  
	
	  
	<div class="page-header">
			
					
		
				<center><strong style="font-size:25px;margin-left:230px;" >Hostel</strong> </center>

	
	</div>
	<div class="row" style="margin-bottom:10px;">
		<div class="col-md-8">
		@if(session('success'))
	  <div class="container col-md-6 offset-md-4" style="margin-left:350px;">
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
		</div>
		<div class="col-md-4"  style="text-align:right;padding-right:48px;">
		<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;background:#ffc20e;border-color:#ffc20e;" href="{{ url('admin/') }}" ><b>Back</b></a> 
		
		</div>
	</div>
	
	<!-- <div style="text-align:right;padding-right:34px;">
	</div><br> -->
	
	<?php
	use App\User;
	use App\enq;
	?>
	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr style="">
							<th>ID</th>
							<th>Name</th>
							<th>EMAIL</th>
							<th>DOB</th>
							<th>Contact</th>
							<th>FATHER'S NAME</th>
							<th>MOTHER'S NAME</th>		
							<th>ADDRESS</th>	
							<th>ADHAR NO.</th>	
							<th>PASSPORT IMAGE</th>		
							<th>Delete HOSTEL RECORD</th>
						</tr>  
					</thead>

					<tbody>
						@if($hostels != null)
							@foreach($hostels as $hostel)
							@if ($hostel->email =="admin@gmail.com") 
								@continue
								@endif
								<?php
								$user = User::where('id',$hostel->user_id)->first(); 
								?>	
								<tr>
							
									<td>{{ $hostel->id }}</td>							
									<td>{{ $hostel->name}}</td>
									<td>{{ $hostel->email }}</td>
									<td>{{ $hostel->dob }}</td>
									<td>{{ $hostel->contact }}</td>
									<td>{{ $hostel->father_name }}</td>
									<td>{{ $hostel->mother_name }}</td>
									<td>{{ $hostel->permanent_address }}</td>
                                    <td>{{ $hostel->adhar_no }}</td>
									<td><img style="margin-left:0px;margin-right:100px;width:100%;height:100px;" src="images/storage/ {{ $hostel->passport_image }}" alt="" class="img-responsive">
                                   </td>
									<td>
									<a onclick="return confirm('Are you sure you want to delete?');" href="{{ url('/admin/delete_hostel/'.$hostel->id) }}" class="btn btn-danger" style="font-size:1.4rem">Delete</a> 
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection
