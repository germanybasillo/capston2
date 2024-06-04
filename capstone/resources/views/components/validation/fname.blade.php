@if ($errors->has('fname'))
    <span class="text-danger" style="color: red">{{ $errors->first('fname') }}</span>
@endif