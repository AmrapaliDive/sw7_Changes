@extends('layouts.master2')


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
@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <center><p>{{ $error }}</p></center>
        @endforeach
    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <center><li>{!! \Session::get('success') !!}</li></center>
        </ul>
    </div>
@endif
    <div class='container' style="margin-top:0px;">
<center><b style="font-size:25px; text-decoration-line: underline;text-decoration-style:single">Dealer Account</b></center>

<div class="col-md-2" style="">
 
</div>
      
    </div>
   
    @endsection

