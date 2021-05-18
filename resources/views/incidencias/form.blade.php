{!! csrf_field()!!}
<p>
    <label for="id">Id de la máquina
        <input class="form-control" type="text" name="id" value="{{$user->id ?? old('id')}}">
        {!! $errors->first('id','<span class=error>:message</span>')!!}
    </label>
</p>
<p>
    <label for="location">Fecha incidencia
        <input class="form-control" type="date" name="location" value="">
        {!! $errors->first('location','<span class=error>:message</span>')!!}
    </label>
</p>
<p>
    <label for="id">Descripción
        <input class="form-control" type="text" name="id" value="">
        {!! $errors->first('id','<span class=error>:message</span>')!!}
    </label>
</p>
<p>
    <label>Gravedad</label>
        <br><select name="gravedad" id="selectGravedad" name="selectGravedad" class="">
            <option value="leve">Leve</option>
            <option value="leve">Media</option>
            <option value="leve">Urgente</option>
        </select>
        {!! $errors->first('location','<span class=error>:message</span>')!!}

</p>





