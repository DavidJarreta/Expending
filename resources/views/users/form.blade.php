
<p><label for="nombre">Nombre
        <input class="form-control" type="text" name="name" value="{{$user->name ?? old('name')}}">
        {!! $errors->first('name','<span class=error>:message</span>')!!}
    </label>
</p>

<p><label for="apellidos">Apellidos
        <input class="form-control" type="text" name="surname" value="{{$user->surname ?? old('surname')}}">
        {!! $errors->first('surname','<span class=error>:message</span>')!!}
    </label>
</p>

<p><label for="email">Email
        <input class="form-control" type="text" name="email" value="{{$user->email ?? old('email')}}">
        {!! $errors->first('email','<span class=error>:message</span>')!!}
    </label>
</p>

<p>
    <label for="tipoTrabajador">Tipo de trabajador</label><br>
    <select name="tipoTrabajador" id="tipoTrabajador" class="" name="tipoTrabajador">
        <option value="leve">Administrador</option>
        <option value="leve">Empleado</option>
    </select>
</p>
{{--@unless($user->id)--}}
    <p>
        <label for="password">Contraseña
            <input class="form-control" type="password" name="password">
            {!! $errors->first('password','<span class=error>:message</span>')!!}
        </label>
    </p>
    <p><label for="password_confirmation">Confirmar contraseña
            <input class="form-control" type="password" name="password_confirmation">
            {!! $errors->first('password_confirmation','<span class=error>:message</span>')!!}
        </label>
    </p>

{{--@endunless--}}

<div class="checkbox">
    {{--@foreach($roles as $id => $name)
        <label>
            <input type="checkbox"
                   value="{{$id}}"
                   {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
                   name="roles[]">
            {{$name}}
        </label>
    @endforeach--}}
</div>
{!! $errors->first('roles','<span class=error>:message</span>')!!}
<hr>
