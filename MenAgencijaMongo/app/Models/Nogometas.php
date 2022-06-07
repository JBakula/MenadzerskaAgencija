<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Nogometas extends Model
{
    public $timestamps = false;
    protected $collection = "Nogometas";

    public function UgovorNogometas()
    {
        return $this->hasMany(Ugovor_nogometas_agencija::class);
    }

    use HasFactory;
}
