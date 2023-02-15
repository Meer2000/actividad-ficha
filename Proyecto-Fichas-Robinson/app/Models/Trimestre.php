<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;

    protected $table = 'Trimestre';
    protected $primarykey ='id';
    protected $fillable = ['nombre',
                           ];
}
