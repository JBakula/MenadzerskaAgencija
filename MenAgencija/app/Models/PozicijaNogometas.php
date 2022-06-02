<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PozicijaNogometas extends Model
{
    use HasFactory;
    protected $table = 'Pozicija_nogometas';
    protected $primaryKey = 'pozicija_nogometas_id';
    protected $fillable = [
        'pozicija_fk',
        'nogometas_fk'
    ];
    public $timestamps = false;
}

