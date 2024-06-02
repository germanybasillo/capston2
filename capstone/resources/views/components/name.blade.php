@if ($errors->has('name'))
    <span class="text-danger" style="color: red">{{ $errors->first('name') }}</span>
@endif