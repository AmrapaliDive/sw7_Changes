@extends('layouts.dashboard')

@section('title', 'Franchisee Document')
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
	

					<div class="page-header row">
		<a class="btn btn-primary " style="font-size:20px;width:40px;margin-left:370px;background:#ffc20e;border-color:#ffc20e;color:#b60a0a;" href="{{ url('/franchiseelist') }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg></a>
		<center><strong style="font-size:20px;margin-left:300px;">Franchisee  : {{$franchisee->first_name}} {{$franchisee->last_name}}</strong> </center>

		</div>
	</div>
	

	<div class="panel panel-default container" style="margin-left:270px;width:1050px;overflow:auto;padding-top:30px;">
			<div class="panel-body row">
			<div class="col-md-12">
				<table id="example" class="table table-hover">
					
						<tr>
							<th>Document Name</th>
							<th>Document Details</th>
							<th>Download File</th>
						</tr>
					

				
						@if($document != null)
								<tr>
								    <td>PAN</td>
									<td>{{ $document->pan_no }}</td>
									<td>
										
                    						<a href="{{ asset($document->pan_pdf) }}" download class="btn btn-primary" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Download</a> 
										
									</td>
								</tr>
								<tr>
									<td>Aadhar</td>
									<td>{{ $document->aadhar_no }}</td>
									<td>
										
                    						<a href="{{ asset($document->aadhar_pdf) }}" download class="btn btn-primary" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Download</a> 
										
									</td>
								</tr>
								<tr>
									<td>GST</td>
									<td>{{ $document->gst_number }}</td>
									<td>
										
                    						<a href="{{ asset($document->gst_pdf) }}" download class="btn btn-primary" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Download</a> 
										
									</td>
								</tr>
								<tr>
									<td>Shop Act</td>
									<td>{{ $document->shopack_number }}</td>
									<td>
										
                    					<a href="{{ asset($document->showpack_pdf) }}" download class="btn btn-primary" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Download</a> 
										
									</td>
								</tr>
								<!-- <tr>
									<td>Qualification </td>
									<td>{{$franchisee->qualification}}</td>
									<td>
										
                    					<a href="{{ asset($franchisee->qualification_pdf) }}" download class="btn btn-primary" style="font-size:1.4rem">Download</a> 
										
									</td>
								</tr> -->
								<!-- <tr>
									<td>Profile Image </td>
									<td></td>
									<td>
										
                    					<a href="{{ asset($franchisee->profile_image) }}" download class="btn btn-primary" style="font-size:1.4rem">Download</a> 
										
									</td>
								</tr> -->
								<tr>
									<td>Account Image / PDF </td>
									<td></td>
									<td>
										
                    					<a href="{{ asset($account->pdf) }}" download class="btn btn-primary" style="font-size:1.4rem;background:#b60a0a;border-color:#b60a0a;">Download</a> 
										
									</td>
								</tr> 
                	@endif
					
				</table>
				@if($account != null)
				<br><br>
				<center><strong style="font-size:20px;">Account Details</strong> </center>
				<table id="example" class="table table-hover">
					
								<tr>
								    <th>Account Holder Name</th>
									<td>{{ $account->account_name }}</td>
								
								</tr>
								<tr>
									<th>Account Number</th>
									<td>{{ $account->account_no }}</td>
								</tr>
								<tr>
									<th>Bank Name</th>
									<td>{{ $account->bank_name }}</td>
								
								</tr>
								<tr>
									<th>IFSC Code</th>
									<td>{{ $account->ifsc_code }}</td>
								
								</tr>
							
                </table>
				@endif
			</div>
		</div>
	</div>
	
@endsection
