<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Programa extends Model
{
    use HasFactory;
    protected $table = 'Tipo_Programa';
    protected $primarykey ='id';
    protected $fillable = ['nombre',
                           ];
}
