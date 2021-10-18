<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'telefone', 'cpf', 'cnpj', 'email', 'cep', 'endereco', 'num_imovel'
    ];
}
