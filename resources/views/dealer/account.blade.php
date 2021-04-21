@extends('layouts.master')

@section('content')
    <div class='container' style="margin-top:0px;">
<style>
    .text{
        margin-left:120px;
        margin-right:120px;
    }
    .vl {
  border-left: 2px solid black;
  height: 30px;
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

<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">User Form </b></center>
<br><br>

<form class="row" method="post" action="{{ url('/account/insert') }}" id="Validate_form" enctype="multipart/form-data" style="border:1px solid black;border-radius:20px;">
{{ csrf_field() }}
								<div class="col-md-12" style="padding-top:20px;">
                <div class="form-group">
                <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Account Holder Name</label>
				        <input type="text"id="account_name" class="form-control" style="height:45px" name="account_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Account Holder Name">
                </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Bank Name</label>
				      <input type="text"id="bank_name" class="form-control" style="height:45px" name="bank_name" pattern="[A-Za-z\s]+" required autofocus placeholder="Enter Bank Name">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Bank Account Number</label>
				      <input type="text"id="account_no" class="form-control" style="height:45px" name="account_no"  required autofocus placeholder="Enter Bank Account Number">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;IFSC Code</label>
				      <input type="text"id="ifsc_code" class="form-control" style="height:45px" name="ifsc_code" data-parsley-pattern="^[A-Za-z]{4}\d{7}$" data-parsley-length="[11,11]" data-parsley-pattern-message="This field only contains alphabets and numbers" data-parsley-length-message="Name Should be of 11 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter IFSC Code">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;MICR Code</label>
				      <input type="text"id="micr_code" class="form-control" style="height:45px" name="micr_code"  data-parsley-pattern="^[0-9]{9}$" data-parsley-length="[9,9]" data-parsley-pattern-message="This field only contains numbers" data-parsley-length-message="Name Should be of 9 Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter MICR Code">
            </div>

            <div class="form-group">
              <label for="name" class=" " style="color:black ;">&nbsp;<i class="fa fa-user"></i>&nbsp;Bank Proof (Image/PDF)</label>
				      <input type="file" id="pdf" class="form-control" style="height:45px" name="pdf"  required autofocus >
            </div>

            <center><button type="submit" style="background-color:#3665f3; font-size: 16px; border-radius: 5px;" class="btn btn-primary" name="submit">Save Data</button></center> 		
								</form>
      <br/>
    </div>
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