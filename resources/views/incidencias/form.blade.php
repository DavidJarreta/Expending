{!! csrf_field()!!}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Incidencia') }}</h1></div><br>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="Id_maquina" class="col-md-4 col-form-label text-md-right">{{ __('Id de la máquina') }}</label>

                        <div class="col-md-6">
                            <select name="Id_maquina" id="Id_maquina" class="form-control @error('Id_maquina') is-invalid @enderror">
                                @foreach ($maquinas as $maquina)                                    
                                        <option name = "Id_maquina" value="{{$maquina->Id_maquina}}">{{$maquina->Id_maquina}}-{{$maquina->Ubicacion}}</option>                                    
                                @endforeach
                            </select>    
                            
                            {{--<input class="form-control" type="text" name="Id_maquina" value="">--}}
                            {{--!! $errors->first('id','<span class=error>:message</span>')!!--}}

                            {{--@error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror--}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Fecha_incidencia" class="col-md-4 col-form-label text-md-right">{{ __('Fecha incidencia') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="date" name="Fecha_incidencia" value="">
                            {{--!! $errors->first('location','<span class=error>:message</span>')!!--}}
                            {{--@error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="Descripcion" value="">
                            {{--!! $errors->first('id','<span class=error>:message</span>')!!--}}

                            {{--@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror--}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Gravedad" class="col-md-4 col-form-label text-md-right">{{ __('Gravedad') }}</label>

                        <div class="col-md-6">
                            <select name="Gravedad" id="Gravedad" class="form-control @error('Gravedad') is-invalid @enderror">
                                <option value="leve">Leve</option>
                                <option value="media">Media</option>
                                <option value="urgente">Urgente</option>
                            </select>
                            {{--!! $errors->first('location','<span class=error>:message</span>')!!--}}
                            {{--@error('type_worker')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




