@extends('layouts.dashboard')
@section('css')
     

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.css"/>
@endsection

@section('js')
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/r-2.1.1/datatables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#table').DataTable();
	});
	</script>
@endsection

@section('content')
	@if(session('success'))
	<div class="container col-md-6 offset-md-4" style="padding-top:30px;">
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
	
	<div class="container col-md-6 offset-md-4" style="padding-top:0px;">
	<!-- <a class="panel-heading"class="btn btn-primary" style="font-size:20px;width:50px; height:50px;background-color:#2ab27b;color:white;border-color:#2ab27b;margin-left:230px;" href="{{ url('admin/') }}" ><b><</b></a> -->

					<div class="page-header row">
					<!-- <h3 class="">Manage Images</h3> -->
					<h3 class=" col-md-12 col-sm-12 col-xs-12" style="font-size:30px;"><center><strong>Manage Images</strong> </center></h3>

				   </div>
				  <center><div>
				   <a class="btn btn-primary btn-lg  py-3 px-5 "style="margin-left:0px;"  href="{{ url('admin/') }}" ><b>Back</b>&nbsp;&nbsp;&nbsp;</a>
				<a  class="btn btn-primary btn-lg py-3 px-5 mr-2"   style=""  href="{{ url('admin/sliders/create/') }}" ><b>New Images</b></a>
				
		         </div></center><br>
		</div>
       
	<div class="panel panel-default container " style="margin-left:290px;width:1050px;overflow:auto;margin-top:1.4rem;">
		<div class="panel-body row ">
			<div class="col-md-12">
				<table id="table" class="table table-hover">
					<thead>
						<tr>
							<th>Image Id</th>
							<th >&nbsp;&nbsp;&nbsp;Image Ranking</th>
					        <th>Image Actions</th>
						</tr>
					</thead>

					<tbody>
						@if(isset($sliders))
							@foreach($sliders as $slider)
								<tr>
									<td>{{ $slider->id }}</td>
									<td >{{ $slider->ranking }}</td>
								
								
									<td>
										<div class="btn-group" role="group">
											<!-- <a class="btn btn-primary" style="background-color:white;color:black;border-color:black;" href="{{ url('/admin/sliders/edit/'.$slider->id) }}">Edit</a> -->
											<a class="btn btn-danger" style="height:30px;width:60px;font-size:1.4rem;margin-right:25px;" href="{{ url('/admin/sliders/delete/'.$slider->id) }}">Delete</a>
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
