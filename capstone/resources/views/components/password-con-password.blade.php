


@if ($errors->has('password'))
    <span class="text-danger" style="color: red">{{ $errors->first('password') }}</span>
@endif 