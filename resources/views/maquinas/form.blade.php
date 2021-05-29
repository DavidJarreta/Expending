{!! csrf_field()!!}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Añadir máquina') }}</h1></div><br>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="ubicacion" class="col-md-4 col-form-label text-md-right">{{ __('Ubicación') }}</label>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="ubicacion" id="ubicacion">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




