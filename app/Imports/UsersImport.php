<?php

namespace App\Imports;

use App\Http\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Webpatser\Uuid\Uuid;

class UsersImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id'        => Uuid::generate()->string,
            'email'     => $row[0],
            'password'  => \Hash::make($row[1]."-".$row[2]),
            'firstname' => $row[1],
            'lastname'  => $row[2],
            'phone'     => $row[3],
            'level'     => "Participant",
            'active'    => '1'
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
