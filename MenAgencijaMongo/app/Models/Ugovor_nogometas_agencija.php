<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Ugovor_nogometas_agencija extends Model
{
    public $timestamps = false;
    protected $collection = "Ugovor_nogometas_agencija";

    public function agencija(){
        return $this->belongsTo(Agencija::class);
    }
    
    public function nogometas(){
        return $this->belongsTo(Nogometas::class);
    }

    use HasFactory;
}
