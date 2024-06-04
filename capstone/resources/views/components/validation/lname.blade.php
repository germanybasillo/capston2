@if ($errors->has('lname'))
    <span class="text-danger" style="color: red">{{ $errors->first('lname') }}</span>
@endif