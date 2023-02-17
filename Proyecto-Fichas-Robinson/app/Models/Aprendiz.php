<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $table = 'Aprendices';
    protected $primarykey ='id';
    protected $fillable = ['nombres',
                           'apellidos',
                           'email',
                           'telefono',
                           'fecha',
                           'documento',
                           'users_id',
                           'FICHAS_Id',
                           ];
                           public function user()
                           {
                               return $this->belongsTo('App\Models\User','id');
                           }

                           public function fichas()
                           {
                               return $this->belongsTo('App\Models\Ficha','id');
                           }

    public function scopeDelEstudiante($query, $AprendicesId)
    {
        return $query->where('Users_id', $AprendicesId);
    }

}
