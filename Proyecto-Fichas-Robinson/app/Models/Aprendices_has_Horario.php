<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices_has_Horario extends Model
{
    use HasFactory;

    
    protected $table = 'Aprendices_has_Horarios';
    protected $primarykey ='aprendices_id';
    protected $fillable = ['Horarios_id',
                           'Users_Id',
                           ];
}
