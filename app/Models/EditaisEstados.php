<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditaisEstados extends Model
{
    use HasFactory;

    protected $connection = 'editais';

    protected $fillable = [
        'nome',
    ];
}
