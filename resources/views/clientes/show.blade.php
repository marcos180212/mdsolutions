@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Dados do Cliente</h1>
	<div class="row my-3">
		<div class="col">
			<a href="{{ route('cliente.edit', [$cliente->id]) }}" class="btn btn-dark text-light">Editar</a>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<table class="table table-striped">
				<thead>
					<tr>
						<th width="150px" scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Nome</th>
						<td>{{ $cliente->nome }}</td>
					</tr>
					<tr>
						<th scope="row">Telefone</th>
						<td>{{ $cliente->telefone }}</td>
					</tr>
					<tr>
						<th scope="row">CPF</th>
						<td>{{ $cliente->cpf }}</td>
					</tr>
					<tr>
						<th scope="row">CNPJ</th>
						<td>{{ $cliente->cnpj }}</td>
					</tr>
					<tr>
						<th scope="row">E-mail</th>
						<td>{{ $cliente->email }}</td>
					</tr>
					<tr>
						<th scope="row">CEP</th>
						<td>{{ $cliente->cep }}</td>
					</tr>
					<tr>
						<th scope="row">Endereço</th>
						<td>{{ $cliente->endereco }}</td>
					</tr>
					<tr>
						<th scope="row">Número Imóvel</th>
						<td>{{ $cliente->num_imovel }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
</div>
@endsection