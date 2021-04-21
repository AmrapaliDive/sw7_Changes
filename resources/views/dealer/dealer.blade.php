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

        <form action="{{url('/dealer/insert')}}" id="Validate_form" method='POST' enctype='multipart/form-data' style="border:1px solid black;border-radius:20px; ">
        {{csrf_field()}}
        <div class="text">
        

            <input type="hidden" name="id" id="id" value="{{$user->id or ''}}">

            <div class="form-group row">
                <div class="col-xs-6">
                <label for="name" class="form-label" style="margin-top:20px;">&nbsp;<i class="fa fa-user"></i>&nbsp;First Name</label>
				<input type="text"id="first_name" class="form-control"  name="first_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,17]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="First Name should be between (3,17) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter First Name">
            </div>

            <div class="col-xs-6">
                <label for="name" class="form-label" style="margin-top:20px;">&nbsp;<i class="fa fa-user"></i>&nbsp;Last Name</label>
				<input type="text"id="last_name" class="form-control"  name="last_name" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[1,15]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Last Name should be between (1,15) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter Last Name">
            </div></div>

            <div class="form-group row">
            <div class="col-xs-6">
                <label for="dob" class="form-label" >&nbsp;Date Of Birth</label>
					<input type="text" placeholder="Enter Birth Date" class="form-control" id="dob" name="dob" required/>
				</div>
            
            <div class="col-xs-6">
                <label for="email" class="form-label" >&nbsp;<i class="fa fa-envelope"></i>&nbsp;Email</label>
                    <input type="text" id="email" name="email" class="form-control"  data-parsley-type="email" data-parsley-trigger="keyup" autofocus placeholder="Enter Email "  required>
                </div></div>

                <div class="form-group row">
                <div class="col-xs-6">
                <label for="cnumber" class="form-label" >&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact 1</label>
				<input type="text" id="contact_no1"  autofocus data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" class="form-control" name="contact_no1" required autofocus  placeholder="Enter Contact Number	">
                </div>

                <div class="col-xs-6">
                <label for="cnumber" class="form-label" >&nbsp;<i class="fa fa-phone"></i>&nbsp;Contact 2</label>
				<input type="text" id="contact_no2"  autofocus data-parsley-pattern="[0-9]+$" data-parsley-length="[10,10]" data-parsley-pattern-message="Phone No should be in digits only" data-parsley-length-message="Phone No should be of (10) digits" data-parsley-trigger="keyup" class="form-control" name="contact_no2" required autofocus  placeholder="Enter Contact Number	">
                </div></div>

                <div class="form-group row">
                <div class="col-xs-6">
                <label for="name" class="form-label" >&nbsp;<i class="fa fa-user"></i>&nbsp;City</label>
				<input type="text"id="city" class="form-control"  name="city" data-parsley-pattern="[a-zA-Z]+$" data-parsley-length="[3,14]" data-parsley-pattern-message="This field only contains alphabets" data-parsley-length-message="Name Should be between (2,14) Charachters" data-parsley-trigger="keyup" required autofocus placeholder="Enter City">
                </div>

                <div class="col-xs-6">
                <label for="name" class="form-label" >&nbsp;<i class="fa fa-user"></i>&nbsp;Pincode</label>
				<input type="text"id="pincode" class="form-control"  name="pincode" data-parsley-pattern="[0-9]+$" data-parsley-length="[6,6]" data-parsley-pattern-message="Pincode should be in digits only" data-parsley-length-message="Pincode should be of (6) digits" data-parsley-trigger="keyup" required autofocus placeholder="Enter Pincode">
                </div></div>
                
                <div class="form-group row">
                <div class="col-xs-6">
                <label for="category" class="form-label" >&nbsp;&nbsp;Category</label>
				<!-- <input type="text" id="category"  class="form-control" name="category" required autofocus  placeholder="Enter Category"> -->
                <select  class="form-control " id="category" name="category" required>
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
                        <option>Multiple Category</option>
	  			    </select>
                </div>

                <div class="col-xs-6">
                <label for="category" class="form-label" >&nbsp;&nbsp;Estimated Order Dispatch Time</label>
				<!-- <input type="text" id="dispatch_time"  class="form-control" name="dispatch_time" required autofocus  placeholder="Enter Dispatch Time"> -->
                <select  class="form-control " id="dispatch_time" name="dispatch_time" required>
						<option>Select Type</option>
						<option>Within 24 Hours</option>
						<option>2 Days</option>
						<option>3 Days</option>
						<option>4 Days</option>
						<option>1 Week</option>
				</select>
                </div>
                </div>
               
                <div class="form-group">
                <label for="address" class="form-label" >&nbsp;&nbsp;Address</label>
				<input type="text" id="address"  class="form-control" name="address" required autofocus  placeholder="Enter Address">
                </div>

              
           	
                <div class="form-group">
                <label for="image" class="form-label" >&nbsp;Landline Number</label>
					<input type="text" class="form-control" id="landline_no" placeholder="landline No"  name="landline_no" data-parsley-pattern="^[0][0-9]{2}(-)[0-9]{8}$" required/>
				</div>  

                <div class="form-group">
                <label for="image" class="form-label" >&nbsp;Profile Image</label>
				<input type="file" class="form-control file " id="image" placeholder="Image" name="image"/>
				</div>  

            <div class="form-group row">
            <div class="col-xs-6">
                 <label for="password" class="form-label" >Password</label>
                 <input type="password" name="password" id="password" class="form-control" placeholder="Password"  required data-parsley-length="[6,16]" data-parsley-length-message="password should be of min (6) and max (16) length" data-parsley-trigger="keyup" />
            </div>
            <div class="col-xs-6">
                 <label class="form-label" >Confirm Password</label>
                 <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required data-parsley-equalto="#password" data-parsley-trigger="keyup" />
            </div></div>
            <center><button type="submit" style="background-color:#3665f3; font-size: 16px; border-radius: 5px;" class="btn btn-primary" name="submit">Save Data</button></center>
            <br>
        </form>
      <br/>
    </div>
</div>
    @endsection

    @section('scripts')
<script>
    $(document).ready(function(){
        $('#Validate_form').parsley();

    });

    var array = []
    $(function(){
        $( "#dob" ).datepicker({
        dateFormat: "yy-mm-dd",
        beforeShowDay: function(date)
                        {
                            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                            return [ array.indexOf(string) == -1 ]
                        },
        maxDate: new Date('2005', '12' , '31'),
        changeMonth: true,
        changeYear: true
        });
    });
</script>
@endsection