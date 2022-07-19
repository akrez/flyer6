<?php

namespace App\Imports;

use App\Entity;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithUpserts;

class EntityImport implements ToModel, WithUpserts
{
    protected $type = null;
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        if (is_string($row[0])) {
            return null;
        }
        return new Entity([
            'title' => $row[1],
            'barcode' => $row[2],
            'place' => $row[3],
            'qty' => $row[4],
            'description' => $row[5],
            'type' => $this->type,

        ]);
    }

    public function uniqueBy()
    {
        return 'barcode';
    }

}
