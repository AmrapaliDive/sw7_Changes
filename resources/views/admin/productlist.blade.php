@extends('layouts.dashboard')

@section('title', 'Products')
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
	<div class="container col-md-6 offset-md-4" style="margin-left:350px;">
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> {{ session('success') }}
		</div>
		</div><br>
	@endif
	@if(session('danger'))
	<div class="container col-md-6 offset-md-4">
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
		</div><br>
	@endif
	<div class="page-header">
		<h3 class="" style="font-size:30px;"><center><strong> Products</strong> </center></h3><br><br>
	</div>
	<div style="text-align:right;padding-right:34px;">
	        <a class="btn btn-primary btn-lg mr-2 py-3 px-5" style="background:#ffc20e;border-color:#ffc20e;" href="{{ url('admin/') }}"  ><b>Back</b></a>
			<a class="btn btn-primary btn-lg py-3 px-5"style="background:#ffc20e;border-color:#ffc20e;" href="{{ url('/admin/product') }}"><b>New Product</b></a><br>
	</div><br>
	

	<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;">
	<div class="panel-body row">
			<div class="col-md-12">
					<table id="example" class="table table-hover">
					<thead>
						<tr style="">
							<th>ID</th>
							<th>Name</th>
							<!-- <th>Marathi Title</th> -->
							<th>Type</th>
							<th>Subtype</th>
							<th>Stock</th>
							<th>MRP</th>
							<th>Discount</th>
							<th>GST</th>
							<th>Price</th>
							<!-- <th>Stock</th> -->
							<!-- <th>Available</th>
							<th>Out Of Stock</th> -->
							<th>Edit</th>
							<th>Delete</th>
							<!-- <th>Description</th> -->
							<!-- <th>Image1</th>
							<th>Image2</th>
							<th>Image3</th> -->
						</tr> 
					</thead>

					<tbody>
						@if($products != null)
						<?php 
						$i=1;
						?>
							@foreach($products as $product)
								<tr>		
									<td>{{ $product->id }}</td>							
									<td>{{ $product->product_name }}</td>
									<!-- <td>{{ $product->marathi_title }}</td> -->
									<td>{{ $product->type }}</td>
									<td>{{ $product->subtype }}</td>
									<td>{{ $product->stock }}</td>
									<td>{{ $product->mrp}}</td>
									<td>{{ $product->discount}}</td>
									<td>{{ $product->gst}}</td>
									<td>{{ $product->price }}</td>
								
									
									<!-- <td>{{ $product->remark1 }}</td> -->

									<!-- <td>
										<div class="btn-group" role="group">
											<a class="btn btn-success" href="{{ url('/productlist/stock/available/'.$product->id) }}">Available</a>
										</div>
									</td>

									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-success" href="{{ url('/productlist/stock/'.$product->id) }}">Out Of Stock</a>
										</div>
									</td> -->

									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-primary" href="{{ url('/productlist/edit/'.$product->id) }}" style="background:transparent;border-color:transparent"><i class="fa fa-edit" style="background:transparent;font-size:14px;"></i></a>
										</div>
									</td>
									<td>
										<div class="btn-group" role="group">
										@if($i>15)
											<a class="btn btn-danger" href="{{ url('/productlist/delete/'.$product->id) }}" onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a>
										@endif
										</div>
									</td>
								</tr>
								<?php
								$i = $i+1;
								?>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection
