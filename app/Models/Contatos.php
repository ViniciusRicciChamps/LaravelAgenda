<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    use HasFactory;

    protected $table = "contatos";

    protected $colunasContato = ['nome_contato', 'telefone_contato'];
}
