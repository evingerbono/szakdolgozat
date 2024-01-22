<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogosultsag extends Model
{
    use HasFactory;
    protected  $primaryKey = 'jogId';

    protected $fillable = [
        'megnevezes'
    ];
}
