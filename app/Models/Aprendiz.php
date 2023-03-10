<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $table = 'Aprendices';
    protected $primarykey = 'id';
    protected $fillable = ['nombres',
        'apellidos',
        'email',
        'telefono',
        'fecha',
        'documento',
        'users_id',
        'Fichas_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'users_id');
    }

    public function Fichas()
    {
        return $this->belongsTo('App\Models\Ficha', 'Fichas_id');
    }



    public function scopeDelEstudiante($query, $AprendicesId)
    {
        return $query->where('Users_id', $AprendicesId);
    }

}
