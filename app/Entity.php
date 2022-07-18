<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entity extends Model
{
    use SoftDeletes;
    protected $table="entities";
    public $incrementing = false;
    protected $primaryKey = "barcode";
    protected $keyType = 'string';
    protected $fillable = [
        'barcode', 'type', 'title', 'qty', 'place', 'description'
    ];

}
