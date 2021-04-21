@extends('layouts.master')

@section('content')
    <div class='container' style="margin-top:0px;">
<style>
    .text{
        margin-left:100px;
        margin-right:100px;
    }
    .vl {
  border-left: 2px solid black;
  height: 30px;
}

.form-control{
    height: 30px;
}
.form-label{
    font-size: 12px;
    color:black ;
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
    font-size: 0.9em;
    line-height: 0.9em;
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

<center><b style="font-size:25px; text-decoration-style:single; color:#368c0b;">Dealer Sign Up</b></center>
<br><br><br>
        <form  id="Validate_form"class="row" method="post" action="{{ url('/document/insert') }}" enctype="multipart/form-data" style="border:1px solid black;border-radius:20px;">
         {{csrf_field()}}
         
        <div class="text">
        

            <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">

            <div class="form-group row">
                <div class="col-xs-6">
                <label for="name" class="form-label" style="margin-top:20px;">&nbsp;<i class="fa fa-user"></i>&nbsp;PAN Number</label>
				        <input type="text"id="idproof" class="form-control"  name="idproof"  data-parsley-pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" data-parsley-length="[10,10]" data-parsley-pattern-message="Enter Correct PAN Number" data-parsley-length-message="PAN should be  of 10 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter PAN Number">
            </div>

            <div class="col-xs-6">
            <label for="pan_pdf" class="form-label" style="margin-top:20px;">&nbsp;<i class="fa fa-user"></i>&nbsp;PAN Certificate</label>
            <input type="file" class="form-control file " id="idproof_pdf" placeholder="Image" name="idproof_pdf" required/>
            </div></div>

            <div class="form-group row">
            <div class="col-xs-6">
                <label for="dob" class="form-label" >&nbsp;GST Number</label>
                <input type="text"id="gst_number" class="form-control"  name="gst_number"  data-parsley-pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}" data-parsley-length="[15,15]" data-parsley-pattern-message="Enter Correct GST Number" data-parsley-length-message="PAN should be  of 15 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter GST Number">
				</div>
            
            <div class="col-xs-6">
                <label for="email" class="form-label" >&nbsp;GST Certificate</label>
                <input type="file" class="form-control file " id="gst_pdf" placeholder="Image" name="gst_pdf" required/>        
                </div></div>

                <div class="form-group row">
                <div class="col-xs-6">
                <label for="cnumber" class="form-label" >&nbsp;Shop Act Number Number</label>
			        	<input type="text" id="shopact_number" class="form-control" name="shopact_number" required autofocus placeholder="Enter Shop Act Number Number	">
                </div>

                <div class="col-xs-6">
                <label for="email" class="form-label" >&nbsp;Shop Act Certificate</label>
                <input type="file" class="form-control file " id="shopact_pdf" placeholder="Image" name="shopact_pdf" required/>        
                </div></div>
       <center><button type="submit" style="background-color:#3665f3; font-size: 16px; border-radius: 5px;" class="btn btn-primary" name="submit">Save Data</button></center>
        </form>
      <br/>
    </div>
    <br> <br> <br> <br>

</div>
    @endsection

    @section('scripts')
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script>
$(document).ready(function(){
    $('#Validate_form').parsley();

});


</script>
@endsection