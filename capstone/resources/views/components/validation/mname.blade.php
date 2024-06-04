@if ($errors->has('mname'))
    <span class="text-danger" style="color: red">{{ $errors->first('mname') }}</span>
@endif