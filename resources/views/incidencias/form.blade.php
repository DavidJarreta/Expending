{{--{!! csrf_field()!!}
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
    <label>Gravedad
        <br><select name="gravedad" id="selectGravedad" name="selectGravedad" class="form-control">
            <option value="leve">Leve</option>
            <option value="leve">Media</option>
            <option value="leve">Urgente</option>
        </select>
        {!! $errors->first('location','<span class=error>:message</span>')!!}
    </label>

</p>--}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Incidencia') }}</h1></div><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id de la máquina') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id" value="{{$user->id ?? old('id')}}">
                                {!! $errors->first('id','<span class=error>:message</span>')!!}

                                {{--@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Fecha incidencia') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="date" name="location" value="">
                                {!! $errors->first('location','<span class=error>:message</span>')!!}
                                {{--@error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="id" value="">
                                {!! $errors->first('id','<span class=error>:message</span>')!!}

                                {{--@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror--}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type_worker" class="col-md-4 col-form-label text-md-right">{{ __('Gravedad') }}</label>

                            <div class="col-md-6">
                                <select name="type_worker" id="type_worker" class="form-control @error('type_worker') is-invalid @enderror">
                                    <option value="leve">Leve</option>
                                    <option value="media">Media</option>
                                    <option value="urgente">Urgente</option>
                                </select>
                                {!! $errors->first('location','<span class=error>:message</span>')!!}
                                {{--@error('type_worker')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror--}}
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




