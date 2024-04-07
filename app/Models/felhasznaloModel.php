<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class felhasznaloModel extends Model
{
    use HasFactory;
    protected $table = "felhasznalo";
    public $timestamps = false;
}
