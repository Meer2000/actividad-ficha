<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'FICHAS';
    protected $primarykey ='id';
    protected $fillable = ['nombre',
                           'Users_Id',
                           'trimestre_idtrimestre'                     
                           ];
}
