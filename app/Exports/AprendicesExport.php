<?php

namespace App\Exports;

use App\Models\Aprendiz;
use Maatwebsite\Excel\Concerns\FromCollection;

class AprendicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Aprendiz::all();
    }
}
