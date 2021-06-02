<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'Estado_maquina',
        'Fecha',
        'Dinero_recaudado',
        'Contador',
        'Id_usuario',
        'Id_maquina'
    ];

    
    protected $hidden = [
        'remember_token'
    ];

    protected $table = 'albaranes';

    protected $primaryKey = "Id_albaran";

    public function nombre()
    {
        return $this->hasMany(User::class, 'id', 'Id_usuario');
    }


}
