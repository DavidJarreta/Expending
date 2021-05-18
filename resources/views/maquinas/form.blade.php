{!! csrf_field()!!}
<p>
    <label for="id">Id de la máquina
        <input class="form-control" type="text" name="id" value="{{$user->id ?? old('id')}}">
        {!! $errors->first('id','<span class=error>:message</span>')!!}
    </label>
</p>
<p>
    <label for="location">Ubicación
        <input class="form-control" type="text" name="location" value="{{$user->location ?? old('location')}}">
        {!! $errors->first('location','<span class=error>:message</span>')!!}
    </label>
</p>



