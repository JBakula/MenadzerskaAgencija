<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    use HasFactory;
    protected $table = 'Liga';
    protected $primaryKey = 'liga_id';
    protected $fillable = [
        'Naziv_lige',
        'Rang',
        'drzava_fk'
    ];
    public $timestamps = false;
}
