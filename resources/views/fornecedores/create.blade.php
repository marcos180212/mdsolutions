@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Cadastrar Novo Fornecedor</h1>

	<form action="{{ route('fornecedor.store') }}" method="post" accept-charset="utf-8">
		@csrf
		<div class="form-row">
			<div class="col">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input class="form-control" type="text" id="nome" name="nome" placeholder="Nome do Fornecedor">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input class="form-control" type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
				</div>
			</div>
			<div class="col-md-8">
				<div class="form-group">
					<label for="cnpj">CNPJ</label>
					<input class="form-control" type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="telefone">Telefone</label>
					<input class="form-control" type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000">
				</div>
			</div>
			<div class="col-md-8">
				<div class="form-group">
					<label for="email">E-mail</label>
					<input class="form-control" type="text" id="email" name="email" placeholder="example@email.com">
				</div>
			</div>
		</div>
		<div class="form-row my-5">
			<div class="col">
				<button type="submit" class="btn btn-success btn-block">Salvar</button>
			</div>
			<div class="col">
				<button type="button" class="btn btn-danger btn-block">Cancelar</button>
			</div>
		</div>
	</form>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
	$( window ).load(function() {
		$('#nome').focus();
	});

	$("#telefone, #celular").mask("(00) 00000-0000");
	$("#cpf").mask("000.000.000-00");
	$("#cnpj").mask("00.000.000/0000-00");
	$("#cep").mask("00000-000");
</script>
@endsection