<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceg extends Model
{
    use HasFactory;

    protected  $primaryKey = 'cegId';

    protected $fillable = [
        'nev',
        'tel',
        'kapcsNeve',
        'cim',
        'email',
        'userId',
        'szakId'
    ];
}
