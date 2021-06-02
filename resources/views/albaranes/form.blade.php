{!! csrf_field()!!}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Datos albarán') }}</h1></div><br>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="Id_maquina" class="col-md-4 col-form-label text-md-right">{{ __('Id de la máquina') }}</label>
                        <div class="col-md-6">
                            <select name="Id_maquina" id="Id_maquina" class="form-control @error('Id_maquina') is-invalid @enderror">
                                @foreach ($maquinas as $maquina)
                                    <option name = "Id_maquina" value="{{$maquina->Id_maquina}}">{{$maquina->Id_maquina}}-{{$maquina->Ubicacion}}</option>    
                                @endforeach                     
                            </select>    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Id_usuario" class="col-md-4 col-form-label text-md-right">{{ __('Id del usuario') }}</label>
                        <div class="col-md-6">
                            <select name="Id_usuario" id="Id_usuario" class="form-control @error('Id_usuario') is-invalid @enderror">
                                @foreach ($users as $user)
                                    <option name = "Id_usuario" value="{{$user->id}}">{{$user->id}}-{{$user->name}}</option>    
                                @endforeach                         
                            </select>    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Estado_maquina" class="col-md-4 col-form-label text-md-right">{{ __('Estado de la maquina') }}</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="Estado_maquina" id="" cols="5" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Fecha" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="date" name="Fecha" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Dinero_recaudado" class="col-md-4 col-form-label text-md-right">{{ __('Cantidad de dinero') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="Dinero_recaudado" value="">
                           
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Contador" class="col-md-4 col-form-label text-md-right">{{ __('Contador') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="number" name="Contador" value="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


