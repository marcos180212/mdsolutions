@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Cadastrar Novo Cliente</h1>
	<div class="row">
		<div class="col">
			<form action="{{ route('cliente.store') }}" method="post" accept-charset="utf-8">
				@csrf
				<div class="form-row">
					<div class="col-md-9">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input class="form-control" id="nome" type="text" name="nome" placeholder="Nome do cliente">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="telefone">Telefone</label>
							<input class="form-control" id="telefone" type="text" name="telefone" placeholder="Telefone do cliente" maxlength="15">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="cpf">CPF</label>
							<input class="form-control" id="cpf" type="text" name="cpf" placeholder="000.000.000-00">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="cnpj">CNPJ</label>
							<input class="form-control" id="cnpj" type="text" name="cnpj" placeholder="00.000.000/0000-00">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-8">
						<div class="form-group">
							<label for="email">E-mail</label>
							<input class="form-control" id="email" type="text" name="email" placeholder="exemple@email.com">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="cep">CEP</label>
							<input class="form-control" id="cep" type="text" name="cep" placeholder="00000-000">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-10">
						<div class="form-group">
							<label for="endereco">Endereço</label>
							<input class="form-control" id="endereco" type="text" name="endereco" placeholder="Endereço do cliente">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="num_imovel">Número Imóvel</label>
							<input class="form-control" id="num_imovel" type="number" name="num_imovel" placeholder="nº">
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
	</div>
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