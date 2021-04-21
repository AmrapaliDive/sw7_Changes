@extends('layouts.master2')

@section('title', ' Manage Products')
@section('meta')

@endsection

@section('styles')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>


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

	
	<div class="container" style="width:1000px">
	<h3 class="" style="font-size:30px;margin-top:20px;"><center><strong>Manage Products</strong> </center></h3><hr style="margin-left:95px;">

		<a class="btn btn-primary btn-lg pull-right "style="float:right;width:200px;margin:10px;margin-top:0px;font-size:1.4rem" href="{{ url('/dealer/product/create') }}">New Product</a>

	</div>
<br>
<div class="panel panel-default container" style="margin-left:270px;width:1060px;overflow:auto;padding-top:30px;">
    	<div class="panel-body row">
			<div class="col-md-12 ">
				<table id="example" class="table table-hover">
					<thead>
						<tr style="color:Green;">
							<th>ID</th>
							<th>Title</th>
							<th>Type</th>
							<th>Subtype</th>
							<th>Quantity</th>
							<th>MRP</th>
							<th>Discount(%)</th>
							<th>Price</th>
							<th>Edit</th>
							<th>Delete</th>
							<!-- <th>Description</th> -->
							<!-- <th>Image1</th>
							<th>Image2</th>
							<th>Image3</th> -->
						</tr> 
					</thead>

					<tbody>
						@if($product != null)
							@foreach($product as $product)
								<tr>		
									<td>{{ $product->id }}</td>							
									<td>{{ $product->product_name }}</td>
									<td>{{ $product->type }}</td>
									<td>{{ $product->subtype }}</td>
									<td>{{ $product->quantity}}</td>
									<td>{{ $product->mrp }}</td>
									<td>{{ $product->discount }}</td>
									<td>{{ $product->price }}</td>
									<!-- <td>{!! $product->description !!}</td> -->
									<!-- <td>{{ $product->path }}</td>
									<td>{{ $product->path2 }}</td>
									<td>{{ $product->path3 }}</td> -->

									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-success" href="{{ url('/dealer/product/edit/'.$product->id) }}"><i class="fa fa-edit"></i></a>
										</div>
									</td>
									<td>
										<div class="btn-group" role="group">
											<a class="btn btn-danger" href="{{ url('/dealer/product/delete/'.$product->id) }}"><i class="fa fa-trash"></i></a>
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
	  <form action="{{url('/dealer/product/import')}}" id="Validate_form" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-md-7" style=" ">

				<center>	<input type="file"aria-label="File browser example"  name="imported-file" require data-parsley-trigger="keyup" style="margin-left:0px;width:200px;border-radius:20px;border:1px solid black;"/>
  
	</div>
	<div class="col-md-5" style=" ">

	<button class="btn btn-primary " style="margin-left:-50px;font-size:1.4rem;" type="submit">Import</button>
	</div>
</center>
	</form> 

	</div>
	{{-- @include('partials.footer') --}}

@endsection