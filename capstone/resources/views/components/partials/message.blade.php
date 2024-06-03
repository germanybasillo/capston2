@if($message = Session::get('success'))
<div class="alert alert-success">
{{ $message }}
</div>
@endif

@if($message = Session::get('info'))
<div class="alert alert-info">
{{ $message }}
</div>
@endif


<div style="margin-left:60px;color:red"><br>
@if($message = Session::get('error'))
<div class="alert alert-danger">
{{ $message }}
</div>
@endif
</div>