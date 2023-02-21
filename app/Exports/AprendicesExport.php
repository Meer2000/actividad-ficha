<?php

namespace App\Exports;

use App\Models\Aprendiz;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\ExportController;

class AprendicesExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function Collection()
    {
        return Aprendiz::all();
    }
}
