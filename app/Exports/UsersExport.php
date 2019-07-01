<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            'User Id',
            'Email',
            'First Name',
            'Last Name',
            'Phone',
            'Address',
            'Image',
            'Level',
            'Active',
            'Confirmation Code',
            'Code Reset Password',
            'Created at',
            'Updated at'
        ];
    }
}
