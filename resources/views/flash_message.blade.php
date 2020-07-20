
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{$message}}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{$message}}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{$message}}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>{{$message}}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>    
    Please check the form below for errors
</div>




@endif