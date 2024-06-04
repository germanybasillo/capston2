@if ($errors->has('profile'))
    <span class="text-danger" style="color: red">{{ $errors->first('profile') }}</span>
@endif