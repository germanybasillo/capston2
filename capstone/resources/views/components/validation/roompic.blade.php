@if ($errors->has('roompic'))
    <span class="text-danger" style="color: red">{{ $errors->first('roompic') }}</span>
@endif