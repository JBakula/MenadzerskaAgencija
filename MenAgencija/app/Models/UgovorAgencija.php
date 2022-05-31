<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgovorAgencija extends Model
{
    use HasFactory;
    protected $table = 'Ugovor_nogometas_agencija';
    protected $primaryKey = 'ugovor_nogometas_agencija_id';
    protected $fillable = [
        'Postotak_od_transfera',
        'Postotak_od_godisnje_place',
        'agencija_fk',
        'nogometas_fk'
    ];
    public $timestamps = false;
}
