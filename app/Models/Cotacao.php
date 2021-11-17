<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotacao extends Model
{
    use HasFactory;
    protected $fillable = ['cliente_id','carro_id','data_locacao','data_devolucao','condutor','email_condutor','canal_de_vendas','status'];
}
