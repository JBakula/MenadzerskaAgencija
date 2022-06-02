<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pozicija extends Model
{
    use HasFactory;
    protected $table = 'Pozicija';
    protected $primaryKey = 'pozicija_id';
    protected $fillable = [
        'Naziv_pozicije'
    ];
    public $timestamps = false;
}
