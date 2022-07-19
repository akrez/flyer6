<?php

namespace App\Exports;

use App\Entity;
use Maatwebsite\Excel\Concerns\FromCollection;

class EntityExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entity::all();
    }
}
