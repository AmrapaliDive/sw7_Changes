@extends('layouts.master')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.2/css/fileinput.min.css">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/bootstrap-tagsinput.css') }}" />
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
	<!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" /> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

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

/* parsley */
input.parsley-success,
  select.parsley-success,
  textarea.parsley-success {
    color: #468847;
    background-color: #DFF0D8;
    border: 1px solid #D6E9C6;
  }

  input.parsley-error,
  select.parsley-error,
  textarea.parsley-error {
    color: #B94A48;
    background-color: rgba(0, 0, 0, 0.18);
    border: 1px solid #EED3D7;
  }

  .parsley-errors-list {
    margin: 2px 0 3px;
    padding: 0;
    list-style-type: none;
    /* font-size: 0.5em; */
    line-height: 0.5em;
    opacity: 0;

    transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
  }

  .parsley-errors-list.filled {
    opacity: 1;
  }

  .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   color:#cc0000;
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

<script>
function calculate(evt) {
	var amount = document.getElementById("mrp").value;
    var discount = document.getElementById("discount").value;
	var gst = document.getElementById("gst").value;
    var finalamount = parseFloat(amount) - parseFloat(discount) +parseFloat((gst/100)*amount);
	document.getElementById("price").innerHTML = finalamount;
	document.getElementById("price").value = finalamount;
}
</script>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>


<script>
$(document).ready(function() {

$("#type").change(function() {

  var el = $(this) ;

  if(el.val() === "Laptop" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Dell</option>");
  $("#subtype").append("<option>Hp</option>");
  $("#subtype").append("<option>Lenovo</option>");
  $("#subtype").append("<option>Toshiba</option>");
  $("#subtype").append("<option>Acer</option>");
  $("#subtype").append("<option>Asus</option>");
  $("#subtype").append("<option>Others</option>");
  }
  else if(el.val() === "Mobiles" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Oppo</option>");
  $("#subtype").append("<option>Samsung</option>");
  $("#subtype").append("<option>Iphone</option>");
  $("#subtype").append("<option>Itel</option>");
  $("#subtype").append("<option>Redmi</option>");
  $("#subtype").append("<option>Vivo</option>");
  }
  else if(el.val() === "Mobile Accessories" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Bluetooth-Headphone & Headsets</option>");
  $("#subtype").append("<option>Gadgets</option>");
  $("#subtype").append("<option>Iphone</option>");
  $("#subtype").append("<option>Itel</option>");
  $("#subtype").append("<option>Redmi</option>");
  $("#subtype").append("<option>Vivo</option>");
  }

  else if(el.val() === "Laptop Peripheral Parts" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Screen</option>");
  $("#subtype").append("<option>Keyboard</option>");
  $("#subtype").append("<option>Hinges</option>");
  $("#subtype").append("<option>Body</option>");
  $("#subtype").append("<option>Wifi Card</option>");
  $("#subtype").append("<option>DVD RW</option>");
  $("#subtype").append("<option>Charger</option>");
  $("#subtype").append("<option>Bios Battery</option>");
  $("#subtype").append("<option>Cables</option>");
  $("#subtype").append("<option>Dc Jack</option>");
  $("#subtype").append("<option>Hitsing</option>");
  $("#subtype").append("<option>Hitting Pest</option>");
  $("#subtype").append("<option>Touchpad</option>");
  $("#subtype").append("<option>Speaker</option>");
  $("#subtype").append("<option>Battery</option>");
  $("#subtype").append("<option>Others</option>");
  }

  else if(el.val() === "Refurbished Laptop" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Dell</option>");
  $("#subtype").append("<option>Hp</option>");
  $("#subtype").append("<option>Lenovo</option>");
  $("#subtype").append("<option>Toshiba</option>");
  $("#subtype").append("<option>Acer</option>");
  $("#subtype").append("<option>Asus</option>");
  $("#subtype").append("<option>Others</option>");
  }

  else if(el.val() === "Desktop" ) {
	$('#subtype').empty();
	$("#subtype").append("<option>Dell</option>");
  $("#subtype").append("<option>Hp</option>");
  $("#subtype").append("<option>Lenovo</option>");
  $("#subtype").append("<option>Toshiba</option>");
  $("#subtype").append("<option>Acer</option>");
  $("#subtype").append("<option>Asus</option>");
  $("#subtype").append("<option>Others</option>");
  }

  else if(el.val() === "Refurbished Desktop" ) {
	$('#subtype').empty();
	$("#subtype").append("<option>Dell</option>");
  $("#subtype").append("<option>Hp</option>");
  $("#subtype").append("<option>Lenovo</option>");
  $("#subtype").append("<option>Toshiba</option>");
  $("#subtype").append("<option>Acer</option>");
  $("#subtype").append("<option>Asus</option>");
  $("#subtype").append("<option>Others</option>");
  }

  else if(el.val() === "Printer" ) {
	$('#subtype').empty();
	$("#subtype").append("<option>HP</option>");
  $("#subtype").append("<option>Canon</option>");
  $("#subtype").append("<option>Xerox</option>");
  $("#subtype").append("<option>Reco</option>");
  $("#subtype").append("<option>Lenovo</option>");
  $("#subtype").append("<option>Epson</option>");
  $("#subtype").append("<option>Peripheral Parts</option>");
  }

  else if(el.val() === "Accessories" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Gaming</option>");
  $("#subtype").append("<option>Adapters</option>");
  $("#subtype").append("<option>Batteries</option>");
  $("#subtype").append("<option>Cooling Pads</option>");
  $("#subtype").append("<option>Headphones</option>");
  $("#subtype").append("<option>Routers & Modems</option>");
  $("#subtype").append("<option>CPU & Processors</option>");
  $("#subtype").append("<option>Graphics Cards</option>");
  $("#subtype").append("<option>Webcam</option>");
  $("#subtype").append("<option>Keyboards</option>");
  $("#subtype").append("<option>Mouse</option>");
  $("#subtype").append("<option>Others</option>");
  }

  else if(el.val() === "Memory" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>RAM</option>");
  $("#subtype").append("<option>SSD</option>");
  $("#subtype").append("<option>HD</option>");
  $("#subtype").append("<option>Portable HD</option>");
  $("#subtype").append("<option>Pen Drive</option>");
  }

  else if(el.val() === "Software" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>Windows 10</option>");
  $("#subtype").append("<option>NPAV Antivirus</option>");
  $("#subtype").append("<option>Quickheal Antivirus</option>");
  $("#subtype").append("<option>Other Software</option>");
  }

  else if(el.val() === "Repairing Tools" ) {
  $('#subtype').empty();
  $("#subtype").append("<option>SMD Machine</option>");
  $("#subtype").append("<option>Soldering Gun</option>");
  $("#subtype").append("<option>Disordering Pump</option>");
  $("#subtype").append("<option>Twisers</option>");
  $("#subtype").append("<option>Cutter</option>");
  $("#subtype").append("<option>Soldering Pest</option>");
  $("#subtype").append("<option>Desoldring Wire</option>");
  $("#subtype").append("<option>Opener</option>");
  $("#subtype").append("<option>Magnify Lamp</option>");
  $("#subtype").append("<option>Microscope</option>");
  $("#subtype").append("<option>Bios Programmer</option>");
  $("#subtype").append("<option>Tool kit</option>");
  $("#subtype").append("<option>SMD Tester</option>");
  $("#subtype").append("<option>DC Power Supply</option>");
  $("#subtype").append("<option>Booster</option>");
  $("#subtype").append("<option>LED Backlight Tester</option>");
  }

  else if(el.val() === "ICS" ) {
  $('#subtype').empty();
  }
  
  else if(el.val() === "Components" ) {
  $('#subtype').empty();
  }

});

});

</script>

<script src="{{ asset('assets/js/parsley.js') }}"></script>

<script>
$(document).ready(function(){
        $('#validate_form').parsley();
    });
</script>

@endsection


@section('content')
<br>
<div class="container-fluid">
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

	    
		 <a class="btn btn-primary btn-lg col-md-2 col-md-offset-1 text-center" style="width:40px;font-size:20px;background:#ffc20e;color:#b60a0a;" href="{{ url('/productlist') }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg></a>
		

	<div class="page-header ">
           
            <h3 class="col-md-12 col-sm-12 col-xs-12" style="color:black;font-size:30px;"><center><strong>Product Form</strong></center> </h3>

		</div>
		
		<form class="row" method="post" id="validate_form" action="
		@if(isset( $products))
			{{ url('/admin/product/update/'. $products->id) }}
		@else
			{{ url('/admin/product/insert') }}
		@endif "
		enctype="multipart/form-data">
			{{ csrf_field() }}

			
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Title</label>
					@if(isset( $products))
					<input type="text" placeholder="Enter Product Name" class="form-control" id="product_name" name="product_name" value="{{  $products->product_name}}"required/>
					@else
					<input type="text" placeholder="Enter Product Name" class="form-control" id="product_name" name="product_name" value=""required/>
					
					@endif
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Type</label>
					@if(isset( $products))
					<select  class="form-control " id="type" name="type" required>
					<option value="Laptop" {{  $products->type === 'Laptop' ? 'selected' : '' }}>Laptop</option>
					<option value="Laptop Peripheral Parts" {{  $products->type === 'Laptop Peripheral Parts' ? 'selected' : '' }}>Laptop Peripheral Parts</option>
					<option value="Refurbished Laptop" {{  $products->type === 'Refurbished Laptop' ? 'selected' : '' }}>Refurbished Laptop</option>
					<option value="Desktop" {{  $products->type === 'Desktop' ? 'selected' : '' }}>Desktop</option>
					<option value="Refurbished Desktop" {{  $products->type === 'Refurbished Desktop' ? 'selected' : '' }}>Refurbished Desktop</option>
					<option value="Printer" {{  $products->type === 'Printer' ? 'selected' : '' }}>Printer</option>
					<option value="Accessories" {{  $products->type === 'Accessories' ? 'selected' : '' }}>Accessories</option>
					<option value="Memory" {{  $products->type === 'Memory' ? 'selected' : '' }}>Memory</option>
					<option value="Software" {{  $products->type === 'Software' ? 'selected' : '' }}>Software</option>
					<option value="Repairing Tools" {{  $products->type === 'Repairing Tools' ? 'selected' : '' }}>Repairing Tools</option>
					<option value="ICS" {{  $products->type === 'ICS' ? 'selected' : '' }}>ICS</option>
					<option value="Components" {{  $products->type === 'Components' ? 'selected' : '' }}>Components</option>
					<option value="Mobiles" {{  $products->type === 'Mobiles' ? 'selected' : '' }}>Mobiles</option>
					<option value="Mobile Accessories" {{  $products->type === 'Mobile Accessories' ? 'selected' : '' }}>Mobile Accessories</option>
					</select>
					@else
					<select  class="form-control " id="type" name="type" required>
					<option>Select Type</option>
					<option>Laptop</option>
					<option>Laptop Peripheral Parts</option>
					<option>Refurbished Laptop</option>
					<option>Desktop</option>
					<option>Refurbished Desktop</option>
					<option>Printer</option>
					<option>Accessories</option>
					<option>Memory</option>
					<option>Software</option>
					<option>Repairing Tools</option>
					<option>ICS </option>
					<option>Components </option>
					<option>Mobiles </option>
					<option>Mobile Accessories </option>
	  			</select>
				  @endif  
			</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="title">Sub Type</label>
					@if(isset($products))
					<select  class="form-control " id="subtype"  style="height:47px;font-size:1.5rem;" name="subtype" >
					<option>{{$products->subtype}} </option>
					</select>
					@else
					<select  class="form-control " id="subtype"  style="height:47px;font-size:1.5rem;" name="subtype" >
					<option>Select sub type</option>
					</select>
					@endif
			</div>
			</div>
			<!-- <div class="col-md-10 col-md-offset-1">
				<div class="form-group">
				<label for="title">Category</label>
				@if(isset( $products))
					<select  class="form-control " id="subtype" name="subtype" required>
					<option value="New" {{  $products->subtype === 'New' ? 'selected' : '' }}>New</option>
					<option value="Refurbished" {{  $products->subtype === 'Refurbished' ? 'selected' : '' }}>Refurbished</option>
					</select>
					@else
					<select  class="form-control"   id="subtype" name="subtype">
					<option>Select Category</option>
					<option>New</option>
					<option>Refurbished</option>
                    </select>
					@endif  	
				</div>
			</div> -->
			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Stock</label>
					@if(isset($products))
					<input type="number"    pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="stock" maxlength=6 placeholder="Enter Stock" name="stock"  value="{{  $products->stock }}" required onblur = 'calculate()'/>
					@else
					<input type="number"    pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="stock" maxlength=6 placeholder="Enter Stock" name="stock"  value="" required onblur = ''/>
					
					@endif	
			</div>
			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Product Price</label>
					@if(isset($products))
					<input type="number"    pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="mrp" maxlength=6 placeholder="Enter mrp" name="mrp"  value="{{  $products->mrp }}" required onblur = 'calculate()'/>
					@else
					<input type="number"    pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="mrp" maxlength=6 placeholder="Enter mrp" name="mrp"  value="" required onblur = 'calculate()'/>
					
					@endif	
			</div>

			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">GST(In % )</label>
					@if(isset($products))
					<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="gst" maxlength=6 placeholder="Enter gst" name="gst"  value="{{  $products->gst}}" required onblur = 'calculate()'/>
					@else
					<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="gst" maxlength=6 placeholder="Enter gst" name="gst"  value="" required onblur = 'calculate()'/>
					
					@endif
			</div>
			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Discount</label>
					@if(isset($products))
					<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="discount" maxlength=6 placeholder="Enter discount" name="discount"  value="{{  $products->discount}}" required onblur = 'calculate()'/>
					@else
					<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="discount" maxlength=6 placeholder="Enter discount" name="discount" required onblur = 'calculate()'/>
					@endif
			
			</div>
			<div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
					<label for="title">Product Final Price</label>
					@if(isset($products))
					<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="price" maxlength=6 placeholder="Enter Price" name="price"  value="{{  $products->price }}" required/>
					@else
					<input type="number" step="0.01"  pattern='[0-9]+(\\.[0-9][0-9]?)?' class="form-control" id="price" maxlength=6 placeholder="Enter Price" name="price"  required/>
					@endif
			</div>

			<!-- <textarea id="summernote"><p>Hello Summernote</p></textarea> -->
			<div class="col-md-10 col-md-offset-1">
				<div class="form-group">
					<label for="summernote">Description</label><br>
					<textarea id="summernote" placeholder="Enter product content" cols="180" name="summernote"  required>
						@if(isset( $products))
							{!!  $products->description !!}
						@endif
					</textarea>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
					<label for="imagefile1">Product Image-1(Select Image)</label>
					@if(isset($products)) {{ 'Leave Blank to not change image' }} 
						<input type="file" class="form-control file" id="imagefile1" placeholder="Image" name="imagefile1"/>
					<!-- <input type="file" class="form-control file" id="imagefile1" placeholder="Image" name="imagefile1"/> -->
					@else
						<input type="file" class="form-control file" id="imagefile1" placeholder="Image" name="imagefile1" required/>
					@endif
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
					<label for="title">Video</label>
					@if(isset($products))
					<input type="text" placeholder="Enter Product Video Link" class="form-control" id="video" name="video" value="{{  $products->video }}"/>
					@else
					<input type="text" placeholder="Enter Product Video Link" class="form-control" id="video" name="video" value=""/>
					
					@endif
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4">
				<button type="submit" class="btn btn-primary btn-raised col-md-10 col-xs-12" style="background:#ffc20e;color:#b60a0a;">Submit</button>
			</div>
		</form>
	</div>
		</div>
		<br><br><br>
@endsection

