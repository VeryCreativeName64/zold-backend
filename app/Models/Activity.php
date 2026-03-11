<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /** @use HasFactory<\Database\Factories\ActivityFactory> */
    use HasFactory;

    protected $primaryKey = 'tevekenyseg_id';


    protected $fillable = [
        'tevekenyseg_nev',
        'pontszam',
    ];
}
