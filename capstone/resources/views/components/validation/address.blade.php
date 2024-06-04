@if ($errors->has('address'))
    <span class="text-danger" style="color: red">{{ $errors->first('address') }}</span>
@endif