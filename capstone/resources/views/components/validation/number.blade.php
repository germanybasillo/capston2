@if ($errors->has('number'))
    <span class="text-danger" style="color: red">{{ $errors->first('number') }}</span>
@endif