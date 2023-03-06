<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['nome_carta', 'costo_mana', 'figura', 'tipo_carta', 'edizione', 'effetti', 'testo', 'forza', 'costituzione'];
}
