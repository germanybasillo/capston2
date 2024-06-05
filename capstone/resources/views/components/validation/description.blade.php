@if ($errors->has('description'))
    <span class="text-danger" style="color: red">{{ $errors->first('description') }}</span>
@endif