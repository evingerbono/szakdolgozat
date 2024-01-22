<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Felhasznalo extends Model
{
    use HasFactory;
    protected  $primaryKey = 'userId';

    protected $fillable = [
        'felNev',
        'jelszo',
        'jogId'
    ];
}
