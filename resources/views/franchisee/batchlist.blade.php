@extends('layouts.master2')

@section('title', ' Batches')
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

	
	<div class="container" >
	<h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>Manage Batch</strong> </center></h3><hr style="margin-left:95px;">

		<a class="btn btn-primary btn-lg pull-right "style="float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="{{ url('/franchisee/batches/create') }}">New Batch</a>

	</div>
<br>
<div class="panel panel-default container" style="margin-right:50px;width:1050px;overflow:auto;padding-top:30px;">
    	<div class="panel-body row">
			<div class="col-md-12 ">
				<table id="example"class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr style="">
							
							<th>Batch id</th>
							<th>batch Name</th>
							<th>timeslot</th>
							<th>syllabus</th>
							<th>timetable</th>
							<th>Duration</th>
							<th>Seats Available</th>
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
							<!-- <th>Description</th> -->
							<!-- <th>Image1</th>
							<th>Image2</th>
							<th>Image3</th> -->
						</tr> 
					</thead>

					<tbody>
						@if($batches != null)
							@foreach($batches as $batch)
								<tr>		
									<td>{{ $batch->id }}</td>							
									<td>{{ $batch->batch_name }}</td>
									<td>{{ $batch->timeslot }}</td>
									<td>{{ $batch->syllabus }}</td>
									<td>{{ $batch->timetable}}</td>
									<td>{{ $batch->course_duration }}</td>
									<td>{{ $batch->seats_available }}</td>
									<td>{{ $batch->status }}</td>
									<!-- <td>{!! $batch->description !!}</td> -->
									<!-- <td>{{ $batch->path }}</td>
									<td>{{ $batch->path2 }}</td>
									<td>{{ $batch->path3 }}</td> -->

									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-success" href="{{ url('/franchisee/batches/edit/'.$batch->id) }}"><i class="fa fa-edit"></i></a>
										</div>
									</td>
									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-danger" href="{{ url('/franchisee/batches/delete/'.$batch->id) }}"><i class="fa fa-trash"></i></a>
										</div>
									</td>
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