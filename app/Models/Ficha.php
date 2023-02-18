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
                           'user_id',
                           'Trimestre_id',
                           'Tipo_Programa_id',
                           'Programas_id'
                           ];
    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function Trimestre()
    {
        return $this->belongsTo('App\Models\Trimestre','Trimestre_id');
    }
    public function Tipo_Programa()
    {
        return $this->belongsTo('App\Models\Tipo_Programa','Tipo_Programa_id');
    }
    public function Programas()
    {
        return $this->belongsTo('App\Models\Programa','Programas_id');
    }

    public function scopeDelEstudiante($query, $FichasId)
    {
        return $query->where('user_id', $FichasId);
    }
}
