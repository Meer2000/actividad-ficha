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
                           'Users_Id',
                           'Trimestre_id',
                           'TIPO_PROGRAMA_Id',
                           'Programas_Id'
                           ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','Id');
    }
    public function trimestre()
    {
        return $this->belongsTo('App\Models\Trimestre','idtrimestre');
    }
    public function tipo_programa()
    {
        return $this->belongsTo('App\Models\Tipo_programa','id');
    }
    public function Programa()
    {
        return $this->belongsTo('App\Models\Programa','id');
    }


}
