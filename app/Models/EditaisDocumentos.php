<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditaisDocumentos extends Model
{
    use HasFactory;

    protected $connection = 'editais';

    protected $fillable = [
        'edital',
        'nome',
        'descricao',
        'caminho',
        'publicacao',
    ];
}
