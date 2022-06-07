<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Drzava extends Model
{
    public $timestamps = false;
    protected $collection = "Drzava";

    use HasFactory;
}
