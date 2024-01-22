<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diak extends Model
{
    use HasFactory;

    protected  $primaryKey = 'diakId';

    protected $fillable = [
        'nev',
        'szulDatum',
        'email',
        'tel',
        'fax',
        'lakcim',
        'neme',
        'allampolg',
        'szakId',
        'userId'
    ];
}
