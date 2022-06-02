<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
    use HasFactory;
    protected $table = 'Drzava';
    protected $primaryKey = 'drzava_id';
    protected $fillable = [
        'Naziv_drzave'
    ];
    public $timestamps = false;
}
