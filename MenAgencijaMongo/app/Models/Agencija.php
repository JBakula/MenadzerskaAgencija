<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Agencija extends Model
{
    public $timestamps = false;
    protected $collection = "Agencija";

    public function ugovorAgencija(){
        return $this->hasMany(Ugovor_nogometas_agencija::class);
    }

    use HasFactory;
}
