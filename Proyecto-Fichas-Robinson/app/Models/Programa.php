<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $table = 'Programas';
    protected $primarykey ='id';
    protected $fillable = ['nombre',
                           'FICHAS_Id'              
                           ];
}
