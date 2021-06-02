<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbaranAlimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id_albaran',
        'Id_alimento',
        'Cantidad',
    ];
   
    protected $hidden = [
        'remember_token'
    ];

    protected $table = 'albaran_alimento';

    protected $primaryKey = "Id";



    

}
