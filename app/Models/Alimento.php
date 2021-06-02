<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Precio',
    ];

    protected $table = 'alimentos';

    protected $primaryKey = "Id_alimento";

}
