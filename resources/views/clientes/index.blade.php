@extends('layouts.app')

@section('content')
<div class="container">
	<div class="text-center mb-5">
		<h1>Meus Clientes</h1>
	</div>
	<hr>
	<div class="row my-3">
		<div class="col-md-8">
			<a href="{{ route('cliente.create') }}" title=""><button class="btn btn-primary">Novo Cadastro</button></a>
		</div>
		<div class="col-md-4" hidden="">
			<div class="form-row ">
				<div class="col-md-9">
					<input class="form-control" type="text" name="search">
				</div>
				<div class="col-md-3">
					<button class="btn btn-info px-3">Buscar</button>
				</div>
			</div>
		</div>
	</div>
	@if(count(\App\Cliente::all()) > 0)
	<table id="MyTable" class="table table-striped">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">Telefone</th>
				<th scope="col">CPF</th>
			</tr>
		</thead>
		<tbody>
			@php
			$clientes = \App\Cliente::paginate(10);
			@endphp
			@foreach($clientes as $cliente)
			<tr>
				<th scope="row">{{ $cliente->id }}</th>
				<td>
					<a href="{{ route('cliente.show', [$cliente->id]) }}" title="">
						{{ \Str::words(ucwords($cliente->nome), 2) }}
					</a>
				</td>
				<td>{{ $cliente->telefone }}</td>
				<td>{{ $cliente->cpf }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $clientes->links() }}
	@else
	<p>Nenhum fornecedor cadastrado.</p>
	@endif
</div>
@endsection

@section('javascript')
<script type="text/javascript">
	$(document).load(function() {
		$('#MyTable').DataTable({
			scrollX: true
		});
	})
</script>
@endsection
