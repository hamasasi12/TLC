<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AsesorExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::role('asesor')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Nama', 'Email', '', 'Status', '', '', ''];
    }
}
