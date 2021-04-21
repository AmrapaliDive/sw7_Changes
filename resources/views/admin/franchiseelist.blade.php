@extends('layouts.dashboard')

@section('title', ' Franchisee')
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
	</div>
	  
	<div class="page-header">
			
			<h3 class="col-md-6 offset-md-4" style="font-size:30px;"><center><strong>Manage Franchisee</strong> </center></h3><br><br>		
			
			<!-- <a class="btn btn-primary pull-right"style="width:200px;margin:10px;margin-top:0px" href="{{ url('/admin/product') }}">New Product</a> -->
		

	
	</div>
	<center><div class="">
	<a class="btn btn-primary btn-lg  py-3 px-5" style="margin-left:250px;background:#ffc20e;border-color:#ffc20e;" href="{{ url('admin/') }}"><b>Back</b></a>
	<a class="btn btn-primary btn-lg  py-3 px-5" style="background:#b60a0a;border-color:#b60a0a;" href="{{ url('/franchisee_addresses') }}"><b>Franchisee Registration Report</b></a>
	<a class="btn btn-primary btn-lg  py-3 px-5" style="background:#b60a0a;border-color:#b60a0a;" href="{{ url('/franchisee_details') }}" ><b>Franchisees Details</b></a>
	</div></center>
	</div>
	<br>
	<?php
	use App\User;
	use App\Franchisee;
	?>

	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
					<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<!-- <th>Referral Person</th>
							<th>Referral contact</th> -->
							<th>Address</th>
							<th>City</th>
							<th>Pincode</th>
							<th>Batches</th>
							<th>Documents</th>
							<th>Email Verification</th>
							<th>Change Status</th>
							<th>Action</th>
							<th>edit Franchisee</th>
							<th>Delete Franchisee</th>
							<!-- <th>Edit</th>
							<th>Delete</th> -->
						</tr> 
					</thead>

					<tbody>
					@if($franchisees != null)
							@foreach($franchisees as $franchisee)
								<tr>
								<?php
								$user = User::where('id',$franchisee->user_id)->first(); 
								?>		
									<td>{{ $franchisee->id }}</td>							
									<td>{{ $franchisee->first_name }}  {{$franchisee->last_name}}</td>
									<td>{{ $franchisee->email }}</td>
									<td>{{ $franchisee->contact1 }}</td>
									<!-- <td>{{ $franchisee->contact_person}}</td>
									<td>{{ $franchisee->contact_person_contact}}</td> -->
									<td>{{ $franchisee->address }}</td>
									<td>{{ $franchisee->city }}</td>
									<td>{{ $franchisee->pincode }}</td>
									<td><a class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;" href="{{ url('/admin/franchisee_batches/'.$user->id) }}" >Batches</a></td>
									<td><a class="btn btn-primary" style="font-size:1.4rem;background:#ffc20e;border-color:#ffc20e;" href="{{ url('/admin/franchisee_doc/'.$franchisee->id) }}" >Documents</a></td>
									<td>
									@if($franchisee->verify==1)
									Verified
									@else
									Not Verified
									@endif
									</td>
									<td style="max-width:100px;">
								
										
											<form  method="post" action =" {{ url('/admin/update_franchisee_status/'.$franchisee->id) }}">
											{{ csrf_field() }}
												
														<!-- <label class="control-label" style="font-size:20px" for="title">Status</label> -->
														
											@if(isset($franchisee))
											<select  class="form-control" style="width:110px;height:30px;font-size:1.4rem" id="status" name="status">
											<option style="font-size:1.4rem" value="Accepted" {{ $user->status === 'Accepted' ? 'Accepted' : '' }}>Accepted</option>
											<option style="font-size:1.4rem" value="Block" {{ $user->status === 'Block' ? 'selected' : '' }}>Block</option>
											<option style="font-size:1.4rem"value="Pending" {{ $user->status === 'Pending' ? 'selected' : '' }}>Pending</option>
											</select>
											@else
										@endif
										</td>			
										<td >
															<button type="submit" class="btn btn-primary btn-raised" style="font-size:1.4rem;background:#ffc20e;border-color:#ffc20e;" >Change</button>
										</td >			
										<td >
											<a href="{{url('/admin/edit_franchisee/'.$franchisee->id)}}" class="btn btn-primary btn-raised" style="font-size:1.4rem;color:white;background:#ffc20e;border-color:#ffc20e;" >Edit Franchisee</a>
										</td >	
										<td >
											<a onclick="return confirm('Are you sure you want to delete?');" href="{{url('/admin/delete_franchisee/'.$franchisee->id)}}" class="btn btn-danger btn-raised" style="font-size:1.4rem;color:white;background:#b60a0a;border-color:#b60a0a;" >Delete</a>
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
