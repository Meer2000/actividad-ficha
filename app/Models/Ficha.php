<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    protected $table = 'Fichas';
    protected $primarykey ='id';
    protected $fillable = ['nombre',
                           'Users_id',
                           'Trimestre_id',
                           'Tipo_Programa_id',
                           'Programas_id'
                           ];
    public function users()
    {
        return $this->belongsTo('App\Models\User','id');
    }
    public function Trimestre()
    {
        return $this->belongsTo('App\Models\Trimestre','id');
    }
    public function Tipo_Programa()
    {
        return $this->belongsTo('App\Models\Tipo_Programa','id');
    }
    public function Programas()
    {
        return $this->belongsTo('App\Models\Programa','id');
    }

    public function scopeDelEstudiante($query, $FichasId)
    {
        return $query->where('user_id', $FichasId);
    }
}
