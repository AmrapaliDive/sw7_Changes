@extends('layouts.dashboard')

@section('title', ' location')
@section('meta')

@endsection

@section('styles')


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>
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
<div class="container col-md-6 offset-md-4" style="padding-top:30px;margin-top:30px;">
	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
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
	<!-- <a class="panel-heading"class="btn btn-primary" style="font-size:20px;width:50px; height:50px;background-color:#2ab27b;color:white;border-color:#2ab27b;margin-left:230px;" href="{{ url('admin/') }}" ><b><</b></a> -->

	
					<div class="page-header row">
		<h3 class="col-md-6 offset-md-2" style="font-size:25px;"><center><strong>Change Location</strong> </center></h3>
		<!-- <a class="btn btn-primary btn-lg pull-right "style="float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="{{ url('/admin/scheme/create') }}">New Scheme</a> -->
		</div>
	</div>
	
	<div class="panel panel-default container"style="margin-left:270px;width:1050px;overflow:auto">
		<div class="panel-body row">
			<div class="col-md-12">
			<table id="example" class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
                            <th>Edit</th>
							<th>Location</th>
							
						</tr>
					</thead>

					<tbody>
						@if(isset($maps))
							@foreach($maps as $maps)
								<tr>
									<td>{{ $maps->id }}</td>
                                    <td><a class="btn btn-success" href="{{ url('/admin/map/edit/'.$maps->id) }}"><i class="fa fa-edit"></i></a></td>
									<td>{{ $maps->location }}</td>
									
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
