@extends('layouts.app')

@section('content')
<div class="container">
	<div class="text-center mb-5">
		<h1>Meus Fornecedores</h1>
	</div>
	<hr>
	<div class="row my-3">
		<div class="col">
			<a href="{{ route('fornecedor.create') }}" title="">
				<button class="btn btn-primary">Novo Cadastro</button>
			</a>
		</div>
	</div>
	@if(count(\App\Fornecedor::all()) > 0)
	<table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">Telefone</th>
				<th scope="col">CPF</th>
			</tr>
		</thead>
		<tbody>
			@foreach(\App\Fornecedor::all() as $fornecedor)
			<tr>
				<th scope="row">{{ $fornecedor->id }}</th>
				<td>
					<a href="{{ route('fornecedor.show', $fornecedor) }}">
						{{ \Str::words(ucwords($fornecedor->nome), 2) }}
					</a>
				</td>
				<td>{{ $fornecedor->telefone }}</td>
				<td>{{ $fornecedor->cpf }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>Nenhum fornecedor cadastrado.</p>
	@endif
</div>	
@endsection
