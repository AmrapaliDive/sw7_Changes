@extends('layouts.master2')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/css/fileinput.min.css">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}" />
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
	<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" /> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/base.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('/css/footer.css')}}"> --}}

	<style>
	input[type=text]:focus{
	    border-color: black;
	}
	input[type=file]:focus {
	    border-color: black;
	}
		textarea[class=form-control]:focus {
	border-color: black;
	}
	select[class=form-control]:focus {
	border-color: black;
	}
	input[type=text]:hover {
			border-color: black;
	}
	body{
		background:white;
	}
	.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    height: 45px;
    vertical-align: middle;
    
    touch-action: manipulation;
    cursor: pointer;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 18px;
    line-height: 1.6;
    border-radius: 4px;
   
    user-select: none;
}
.page-header {
    padding-bottom: 10px;
    margin: 44px 0 22px;
    border-bottom: 1px solid #eee;
}
	.form-control {
    width: 100%;
    height: 45px;
    padding: 6px 12px;
    background-color: #fff;
    border: 1px solid #ccd0d2;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
	</style>
@endsection

@section('scripts')
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/js/fileinput.min.js"></script> -->
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js"></script>
	<script src="{{ asset('js/articlesform.js') }}"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/js/fileinput.min.js"></script> -->
	<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

	<script>
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>


<script>
$(document).ready(function() {

$("#type").change(function() {

  var el = $(this) ;

  if(el.val() === "Pulse Seeds" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>chana</option>");
  $("#subtype").append("<option>peans</option>");
  $("#subtype").append("<option>mung</option>");
  $("#subtype").append("<option>other pulse seeds</option>");
  }

  else if(el.val() === "Vegetables" ) {
  $('#subtype').empty();
  $("#subtype").append("<option value='Leafy Vegetable'>Leafy Vegetable</option>");
  $("#subtype").append("<option value='Organic Vegetable'>Organic Vegetable</option>");
  $("#subtype").append("<option value='Root Vegetable'>Root Vegetable</option>");
  $("#subtype").append("<option value='Seasonal Vegetable'>Seasonal Vegetable</option>");
  }

  else if(el.val() === "Fruits" ) {
  $('#subtype').empty();
  $("#subtype").append("<option value='organic'>Organic Fruits</option>");
  $("#subtype").append("<option value='seasonal'>Seasonal Fruits</option>");
  $("#subtype").append("<option value='other fruits'>Other Fruits</option>");
  }
	
});

});

</script>

@endsection

@section('content')

	@if(session('success'))
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> {{ session('success') }}
		</div>
	@endif
	@if(session('danger'))
		<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong> {{ session('danger') }}
		</div>
	@endif

	<div class="container-fluid" style="margin-top:30px;">
	<div class="page-header row">
            {{-- <a class="btn btn-primary btn-lg col-md-2 col-md-offset-2" style="width:40px;font-size:20px;background-color:#2ab27b;color:white;border-color::#2ab27b;" href="{{ url('/dealer/products') }}" ><</a> --}}
            <h3 class="col-md-12 col-sm-8 col-xs-8" style="color:black;font-size:30px;"><center><strong>Product Form</strong></center> </h3>

		</div>

		<form class="row" method="post" action="
		@if(isset($product))
			{{ url('/dealer/product/update/'.$product->id) }}
		@else
			{{ url('/dealer/product/insert') }}
		@endif "
		enctype="multipart/form-data" style="width: 81%; float: right;">
			{{ csrf_field() }}

			
			<div class="col-md-10 col-md-offset-1">
			
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" placeholder="Enter Product Title" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name or '' }}"required/>
				</div>
			</div>
			 <div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Type</label>
					@if(isset($product))
						<select  class="form-control" style="height:47px" id="type" name="type">
						<option value="Collectibles" {{ $product->type === 'Collectibles' ? 'selected' : '' }}>Collectibles</option>
						<option value="Electronics" {{ $product->type === 'Electronics' ? 'selected' : '' }}>Electronics</option>
						<option value="Fashion" {{ $product->type === 'Fashion' ? 'selected' : '' }}>Fashion</option>
						<option value="Health & Beauty" {{ $product->type === 'Health & Beauty' ? 'selected' : '' }}>Health & Beauty</option>
						<option value="Sports" {{ $product->type === 'Sports' ? 'selected' : '' }}>Sports</option>
						<option value="Books" {{ $product->type === 'Books' ? 'selected' : '' }}>Books</option>
						<option value="Home & Garden" {{ $product->type === 'Home & Garden' ? 'selected' : '' }}>Home & Garden</option>
						<option value="Furniture" {{ $product->type === 'Furniture' ? 'selected' : '' }}>Furniture</option>
						<option value="Automative Parts" {{ $product->type === 'Automative Parts' ? 'selected' : '' }}>Automative Parts</option>
						<option value="Machinary Parts" {{ $product->type === 'Machinary Parts' ? 'selected' : '' }}>Machinary Parts</option>
						<option value="Dairy Products" {{ $product->type === 'Dairy Products' ? 'selected' : '' }}>Dairy Products</option>
						<option value="Agricultural" {{ $product->type === 'Agricultural' ? 'selected' : '' }}>Agricultural</option>
						<option value="Institute lab equipment" {{ $product->type === 'Institute lab equipment' ? 'selected' : '' }}>Institute lab equipment</option>
						</select>
											
					@else
						<select  class="form-control " id="type"  style="height:47px" name="type" required>
						<option>Select Type</option>
						<option>Collectibles</option>
						<option>Electronics</option>
						<option>Fashion</option>
						<option>Health & Beauty</option>
						<option>Sports</option>
						<option>Books</option>
						<option>Home & Garden</option>
						<option>Furniture</option>
						<option>Automative Parts</option>
						<option>Machinary Parts</option>
						<option>Dairy Products</option>
						<option>Agricultural</option>
						<option>Institute lab equipment</option>
	  			    </select>
				    @endif
			</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Sub Type</label>
					@if(isset($product))
					<select  class="form-control " id="subtype"  style="height:47px" name="subtype" required>
					<option>{{$product->subtype}} </option>
					</select>
					@else
					<select  class="form-control " id="subtype"  style="height:47px" name="subtype" required>
					<option>Select sub type</option>
					</select>
					@endif
			</div>
			</div>

			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Quantity</label>
					<input type="number" placeholder="Enter Product Title" class="form-control" id="quantity" name="quantity" min="1" value="{{ $product->quantity or '' }}"required/>
				</div>
			</div>
			
			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">MRP</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="mrp" placeholder="Enter MRP" name="mrp"  value="{{ $product->mrp or '' }}" onblur = 'calculate()' required/>
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Discount(In Percentage)</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="discount" placeholder="Enter Discount" name="discount"  value="{{ $product->discount or '' }}" onblur = 'calculate()' required/>
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Price</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="price" placeholder="Enter Price" name="price"  value="{{ $product->price or '' }}" required readonly/>
			</div>
		
			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Height</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="height" placeholder="Enter Height" name="height"  value="{{ $product->height or '' }}" required/>
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Width</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="width" placeholder="Enter Width" name="width"  value="{{ $product->width or '' }}" required/>
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Depth</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="depth" placeholder="Enter Depth" name="depth"  value="{{ $product->depth or '' }}" required/>
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Weight</label>
					<input type="number" pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="weight" placeholder="Enter Weight" name="weight"  value="{{ $product->weight or '' }}" required/>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="summernote">Description</label><br>
					<textarea id="summernote" placeholder="Enter product content" cols="120" name="summernote"  required>
						@if(isset($product))
							{!! $product->description !!}
						@endif
					</textarea>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile1">Product Image-1(Select Image)
						@if(isset($image)) {{ 'Leave Blank to not change image' }} @endif
					</label>
					<input type="file" class="form-control file" id="imagefile1" placeholder="Image" name="imagefile1"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile2">Product Image-2(Select Image)
						@if(isset($image)) {{ 'Leave Blank to not change image' }} @endif
					</label>
					<input type="file" class="form-control file" id="imagefile2" placeholder="Image" name="imagefile2"/>
				</div>
			</div> 
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile">Product Image-3(Select Image)
					</label>
					<input type="file" class="form-control file" id="imagefile3" placeholder="Image" name="imagefile3"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile">Product Image-4(Select Image)
					</label>
					<input type="file" class="form-control file" id="imagefile4" placeholder="Image" name="imagefile4"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile">Product Image-5(Select Image)
					</label>
					<input type="file" class="form-control file" id="imagefile5" placeholder="Image" name="imagefile5"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile">Product Image-6(Select Image)
					</label>
					<input type="file" class="form-control file" id="imagefile6" placeholder="Image" name="imagefile6"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile">Product Image-7(Select Image)
					</label>
					<input type="file" class="form-control file" id="imagefile7" placeholder="Image" name="imagefile7"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile">Product Image-8(Select Image)
					</label>
					<input type="file" class="form-control file" id="imagefile8" placeholder="Image" name="imagefile8"/>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Video</label>
					<input type="text" placeholder="Enter Product Title Video" class="form-control" id="video" name="video" value="{{ $product->video or '' }}"/>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<button type="submit" class="btn btn-primary btn-raised col-md-10 col-xs-12" >Submit</button>
			</div>
		</form>
	</div>
		</div>
		<br><br><br>
		{{-- @include('partials.footer') --}}

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <a id="scrollUp" href="#top" style="position: fixed; z-index:2147483647;display:block;">
      <i class="fa fa-arrow-up"></i>
    </a>
@endsection

<script>
   function calculate(evt) {
	var amount = document.getElementById("mrp").value;
    var discount = document.getElementById("discount").value;
	var discountAmount = amount * (discount/100);
	var price = amount- discountAmount;
	//alert(price);
    document.getElementById("price").innerHTML = price;
	document.getElementById("price").value = price;
}
</script>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>


<script>
$(document).ready(function() {

$("#type").change(function() {

  var el = $(this) ;

  if(el.val() === "Electronics" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Cell Phones</option>");
  $("#subtype").append("<option>Smart Watches</option>");
  $("#subtype").append("<option>Video games</option>");
  $("#subtype").append("<option>Computer Network</option>");
  $("#subtype").append("<option>Camera</option>");
  $("#subtype").append("<option>Headphones</option>");
  $("#subtype").append("<option>Vehicle Electronics</option>");
  $("#subtype").append("<option>TV & Home Electronics</option>");
  $("#subtype").append("<option>Camera Drones</option>");
  }

  else if(el.val() === "Fashion" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>women clothing</option>");
  $("#subtype").append("<option>women shoes</option>");
  $("#subtype").append("<option>men clothing</option>");
  $("#subtype").append("<option>men shoes</option>");
  $("#subtype").append("<option>watch</option>");
  $("#subtype").append("<option>mens accessories</option>");
  $("#subtype").append("<option>womens bag</option>");
  $("#subtype").append("<option>kids clothing</option>");
  }

  else if(el.val() === "Health & Beauty" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>makeup</option>");
  $("#subtype").append("<option>health</option>");
  $("#subtype").append("<option>fragrance</option>");
  $("#subtype").append("<option>nail care</option>");
  $("#subtype").append("<option>hair care</option>");
  $("#subtype").append("<option>skin care</option>");
  $("#subtype").append("<option>Shaving</option>");
  $("#subtype").append("<option>vision care</option>");
  $("#subtype").append("<option>bath</option>");
  }

  else if(el.val() === "Sports" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>cycle</option>");
  $("#subtype").append("<option>outdoor</option>");
  $("#subtype").append("<option>hunting</option>");
  $("#subtype").append("<option>fishing</option>");
  $("#subtype").append("<option>yoga</option>");
  $("#subtype").append("<option>tennis</option>");
  $("#subtype").append("<option>winter</option>");
  $("#subtype").append("<option>team sports</option>");
  $("#subtype").append("<option>fitness technology</option>");
  }

  else if(el.val() === "Books" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Nonfiction</option>");
  $("#subtype").append("<option>Antiquarian & Collectible</option>");
  $("#subtype").append("<option>Fiction & Literature</option>");
  $("#subtype").append("<option>Magazines</option>");
  $("#subtype").append("<option>Textbooks & Educational Books</option>");
  $("#subtype").append("<option>Children & Young Adults</option>");
  $("#subtype").append("<option>Audiobooks</option>");
  $("#subtype").append("<option>Book Accessories</option>");
  $("#subtype").append("<option>Other Books</option>");
  }

  else if(el.val() === "Home & Garden" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Tools</option>");
  $("#subtype").append("<option>Garden</option>");
  $("#subtype").append("<option>Home Improvement</option>");
  $("#subtype").append("<option>Kitchen</option>");
  $("#subtype").append("<option>Lamps, Lighting & Ceiling Fans</option>");
  $("#subtype").append("<option>Home Decor</option>");
  $("#subtype").append("<option>Home Organization Supplies</option>");
  $("#subtype").append("<option>Beads & Jewelry Making Supplies</option>");
  $("#subtype").append("<option>Scrapbooking & Paper Craft Supplies</option>");
  $("#subtype").append("<option>Pet Supplies</option>");
  }

  else if(el.val() === "Furniture" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Beds & Mattresses</option>");
  $("#subtype").append("<option>Tables</option>");
  $("#subtype").append("<option>Chairs</option>");
  $("#subtype").append("<option>Sofas, Armchairs & Couches</option>");
  $("#subtype").append("<option>Home Office Desk</option>");
  $("#subtype").append("<option>Slipcovers</option>");
  $("#subtype").append("<option>Bookcases & Shelving</option>");
  $("#subtype").append("<option>Dining Sets</option>");
  $("#subtype").append("<option>Benches, Stools & Bar Stools</option>");
  $("#subtype").append("<option>TV Stands & Entertainment Units</option>");
  $("#subtype").append("<option>Cabinets & Cupboards</option>");
  $("#subtype").append("<option>Furniture Parts</option>");
  }

  else if(el.val() === "Automative Parts" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Cars & Truck Parts</option>");
  $("#subtype").append("<option>Motorcycle Parts</option>");
  $("#subtype").append("<option>ATV Parts</option>");
  $("#subtype").append("<option>Scooter Parts</option>");
  $("#subtype").append("<option>Snowmobile Parts</option>");
  $("#subtype").append("<option>Motorcycle Apparel</option>");
  $("#subtype").append("<option>Snowmobile Apparel</option>");
  $("#subtype").append("<option>Performance & Racing Parts</option>");
  $("#subtype").append("<option>Vintage Car & Truck Parts</option>");
  $("#subtype").append("<option>Car Electronics</option>");
  }

  else if(el.val() === "Collectibles" ) {
  $('#subtype').empty();
  }

  else if(el.val() === "Dairy Products" ) {
  $('#subtype').empty();
  }

  else if(el.val() === "Machinary Parts" ) {
  $('#subtype').empty();
  }

  else if(el.val() === "Agricultural" ) {
  $('#subtype').empty();
  }

  else if(el.val() === "Institute lab equipment" ) {
  $('#subtype').empty();
  }

});

});

</script>