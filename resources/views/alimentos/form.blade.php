{!! csrf_field()!!}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Crear alimento') }}</h1></div><br>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="Id_maquina" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="Nombre" id="Nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                        <div class="col-md-6">
                            <input class="form-control" type="text" name="Precio" id="Precio">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




