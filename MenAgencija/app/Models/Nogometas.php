<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nogometas extends Model
{
    use HasFactory;
    protected $table = 'Nogometas';
    protected $fillable = [
        'Ime','Prezime','Visina','Vrijednost','Datum_rodjenja','nacionalnost_fk','noga_fk'
    ];
}
