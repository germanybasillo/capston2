@if ($errors->has('number'))
    <span class="text-danger" style="color: red">{{ $errors->first('number') }}</span>
@endif


@if ($errors->has('contact'))
    <span class="text-danger" style="color: red">{{ $errors->first('contact') }}</span>
@endif