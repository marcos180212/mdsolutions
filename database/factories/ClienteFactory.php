<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nome'=>$faker->name(),
	'email'=>$faker->email(),
	'telefone'=>$faker->numerify('(##) #####-####'),
	'cpf'=>$faker->numerify('###.###.###-##'),
	'cnpj'=>$faker->numerify('##.###.###/####-##'),
	'endereco'=>$faker->address(),
	'cep'=>$faker->numerify('64###-###'),
	'num_imovel'=>$faker->numberBetween(1, 100)
    ];
});
