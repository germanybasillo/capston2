@if ($errors->has('contact'))
    <span class="text-danger" style="color: red">{{ $errors->first('contact') }}</span>
@endif