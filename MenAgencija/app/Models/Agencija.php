<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencija extends Model
{
    use HasFactory;
    protected $table = 'Agencija';
    protected $primaryKey = 'agencija_id';
    protected $fillable = [
        'Naziv_agencije',
        'Vlasnik',
        'Email',
        'Kontakt'
    ];
    public $timestamps = false;
}
