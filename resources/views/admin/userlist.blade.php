@extends('layouts.master')

@section('title', 'Users')

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
<div class="container" style="margin-top:30px;">
	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<br><br>
			<strong>Success!</strong> {{ session('success') }}
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
	@endif

	
        <div class="page-header row">
            <a class="btn btn-primary btn-lg pull-left col-md-2" style="width:40px;font-size:20px;background-color:#2ab27b;color:white;border-color:#2ab27b;" href="{{ url('admin/') }}" ><</a>
            <h3 class="col-md-10 col-sm-8 col-xs-8" style="text:centre;color:black;font-size:30px;"><center><strong>Manage Users</strong></center> </h3>

		</div>
	</div>
	
	<div class="panel panel-default container"style="overflow:auto">
		<div class="panel-body row">
			<div class="col-md-12">
				<table id="example" class="table table-hover">
				<thead>
						<tr style="color:Green;">
							<th>ID</th>
						    <th>Name</th>	
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
						</tr>
					</thead>

					<tbody>
					@if($users != null)
							@foreach($users as $user)
								
								<tr>		
									<td>{{ $user->id }}</td>	
									<td>{{ $user->name }}</td>						
									<td>{{ $user->email }}</td>
									<td>{{ $user->cnumber }}</td>
									<td>{{ $user->address }}</td>
                				</tr>
							
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
