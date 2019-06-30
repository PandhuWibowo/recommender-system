<?php

namespace App\Imports;

use App\Http\Models\Assesment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Webpatser\Uuid\Uuid;

class AssessmentImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Assesment([
            'id'                    => Uuid::generate()->string,
            'user_id'               => $row[0],
            'jenis_assessment_id'   => $row[1]
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    public function batchSize(): int
    {
        return 1000;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
