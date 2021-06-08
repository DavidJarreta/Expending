
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Introducir alimentos') }}</h1></div><br>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="Id_alimento" class="col-md-4 col-form-label text-md-right">{{ __('Id de alimento') }}</label>
                        <div class="col-md-6">
                            <select name="Id_alimento" id="Id_alimento" class="form-control @error('Id_alimento') is-invalid @enderror">
                                @foreach ($alimentos as $alimento)
                                    <option name = "Id_alimento" value="{{$alimento->Id_alimento}}">{{$alimento->Id_alimento}}-{{$alimento->Nombre}}</option>    
                                @endforeach                        
                            </select>    
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Cantidad" class="col-md-4 col-form-label text-md-right">{{ __('Cantidad introducida') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="number" name="Cantidad">
                        </div>
                    </div>                    
                </div>
                <input type="hidden" value="{{$albaran}}" name="albaran">
                <input class="btn btn-primary" type="submit" value="Meter alimento">
                <input class="btn btn-primary" type="submit" value="Volver">    
            </div>
        </div>
    </div>
</div>