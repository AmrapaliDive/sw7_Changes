@extends('layouts.master')

@section('styles')
<style>
.btn {
  border: none;
  color: white;
  font-size: 16px;
  cursor: pointer;
}
    .success {background-color: #4CAF50;} 
    .success:hover {background-color: #46a049;}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
    <br> 
    <center><b style="font-size:25px;text-decoration-style:single;">Forget Password</b></center>
        <div class="col-md-9 col-md-offset-2" style="margin-top:20px;">
            <div class="panel panel-primary">
                <div class="panel-heading"><b style="font-family:sans-serif; font-size:18px; ">Reset Password</Reset></b></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <label>Please enter your email address below and we will send you information to change your password.</label>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding:20px;">
                        
                            <label for="email" class="control-label">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                            <div class="form-group" style="padding:20px;">
                             <center><button type="submit" class=" btn btn-primary btn-block">
                                    Reset
                                </button></center>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
