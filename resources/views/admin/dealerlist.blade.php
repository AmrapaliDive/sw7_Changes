@extends('layouts.dashboard')


@section('title', ' franchisees')
@section('meta')

@endsection-

@section('styles')
	<style>
	
	</style>
	
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

@if(session('success'))
	<div class="container col-md-6 offset-md-4" style="padding-top:30px;margin-left:350px;">
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
	
	
					<div class="page-header row">
					<!-- <a class="panel-heading"class="btn btn-primary" style="font-size:20px;width:50px; height:50px;background-color:#2ab27b;color:white;border-color:#2ab27b;margin-left:230px;" href="{{ url('admin/') }}" ><b><</b></a>  -->

					<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Manage Dealer</strong> </center></h3>
		
		</div>
	
	
</div>

	<?php
	use App\User;
	use App\Dealer;
	?>
	
	<div class="panel panel-default container" style="margin-left:265px;width:1090px;overflow:auto;padding-top:30px;">
            <div class="panel-body row">
			<div class="col-md-12"> 
				<table id="example" class="table table-hover">
					<thead>
						<tr style="color:Green;">
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Category</th>
							<th>Pincode</th>
							<th>Products</th>
							<th>Documents</th>
							<th>Email Verification</th>
							<th>Status</th>
							<!-- <th>Edit</th>
							<th>Delete</th> -->
						</tr> 
					</thead>

					<tbody>
						@if($dealers != null)
							@foreach($dealers as $dealer)
								<tr>
								<?php
								$user = User::where('id',$dealer->user_id)->first(); 
								?>		
									<td>{{ $dealer->id }}</td>							
									<td>{{ $dealer->first_name }}  {{$dealer->last_name}}</td>
									<td>{{ $dealer->email }}</td>
									<td>{{ $dealer->contact1 }}</td>
									<td>{{ $dealer->category}}</td>
									<td>{{ $dealer->pincode }}</td>
									<td><a class="" style="" href="{{ url('/admin/dealer_product/'.$dealer->id) }}" >Products</a></td>
									<td><a class="" style="" href="{{ url('/admin/dealer_doc/'.$dealer->id) }}" >Documents</a></td>
									<td>
									@if($dealer->verify==1)
									Verified
									@else
									Not Verified
									@endif
									</td>
									<td style="max-width:100px;">
								
										<div class="container">
											<form  method="post" action =" {{ url('/admin/update_dealer_status/'.$dealer->id) }}">
											{{ csrf_field() }}
													<div class="form-group">
														<!-- <label class="control-label" style="font-size:20px" for="title">Status</label> -->
														
														@if(isset($dealer))
											<select  class="form-control" style="width:110px;height:30px;font-size:1.4rem" id="status" name="status">
											<option style="font-size:1.4rem" value="Accepted" {{ $user->status === 'Accepted' ? 'Accepted' : '' }}>Accepted</option>
											<option style="font-size:1.4rem" value="Block" {{ $user->status === 'Block' ? 'selected' : '' }}>Block</option>
											<option style="font-size:1.4rem"value="Pending" {{ $user->status === 'Pending' ? 'selected' : '' }}>Pending</option>
											</select>
											@else
										@endif
													
										<div class="col-md-10 col-md-offset-3 col-sm-3 col-sm-offset-1 col-xs-12"style="max-width:80px;">
															<button type="submit" class="btn btn-primary btn-raised" style="font-size:1.4rem" >Change</button>
														</div>	
													</div>				
									</form>	
											</div>
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
