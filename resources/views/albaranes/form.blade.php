{!! csrf_field()!!}
<p>
    <label for="id">Id de la máquina
        <input class="form-control" type="text" name="id" value="{{$user->id ?? old('id')}}">
        {!! $errors->first('id','<span class=error>:message</span>')!!}
    </label>
</p>

<p>
    <label for="addedFood">Alimentos introducidos
        <input class="form-control" type="text" name="addedFood" value="{{$user->addedFood ?? old('addedFood')}}">
        {!! $errors->first('addedFood','<span class=error>:message</span>')!!}
    </label>

    <label for="amountAddedFood">Cantidad
        <input class="form-control" type="number" name="amountAddedFood" value="{{$user->amountAddedFood ?? old('amountAddedFood')}}">
        {!! $errors->first('amountAddedFood','<span class=error>:message</span>')!!}
    </label>
</p>

<p>
    <label for="foodWithdrawn">Alimentos retirados
        <input class="form-control" type="text" name="foodWithdrawn" value="{{$user->foodWithdrawn ?? old('foodWithdrawn')}}">
        {!! $errors->first('foodWithdrawn','<span class=error>:message</span>')!!}
    </label>

    <label for="amountFoodWithdrawn">Cantidad
        <input class="form-control" type="number" name="amountFoodWithdrawn" value="{{$user->amountFoodWithdrawn ?? old('amountFoodWithdrawn')}}">
        {!! $errors->first('amountFoodWithdrawn','<span class=error>:message</span>')!!}
    </label>
</p>

<p>
    <label for="money">Cantidad de dinero
        <input class="form-control" type="number" name="money" value="{{$user->money ?? old('money')}}">
        {!! $errors->first('money','<span class=error>:message</span>')!!}
    </label>
</p>
{{--@unless($user->id)--}}
<p>
    <label for="accountant">Contador
        <input class="form-control" type="number" name="accountant" value="{{$user->accountant ?? old('accountant')}}">
        {!! $errors->first('accountant','<span class=error>:message</span>')!!}
    </label>
</p>
{{--@endunless--}}
