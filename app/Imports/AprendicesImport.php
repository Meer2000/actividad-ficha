<?php

namespace App\Imports;

use App\Models\Aprendiz;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Auth;

class AprendicesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aprendiz([
            'nombres'=>$row['nombres'],
            'apellidos'=>$row['apellidos'],
            'email'=>$row['email'],
            'telefono'=>$row['telefono'],
            'fecha'=>$row['fecha'],
            'documento'=>$row['documento'],
             'users_id'=>Auth::user()->id
        ]);
    }
    public function batchSize(): int
    {
        return 13;
    }
    public function chunkSize(): int
    {
        return 13;
    }

}
