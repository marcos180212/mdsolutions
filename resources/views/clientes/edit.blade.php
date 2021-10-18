@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row mb-3">
		<div class="col">
			<h1>Editar Cadastro do Cliente</h1>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form action="#" method="get" accept-charset="utf-8">
				@csrf
				<div class="form-row">
					<div class="col-md-9">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input class="form-control" id="nome" type="text" name="nome" value="{{ $cliente->nome }}" placeholder="Nome do cliente">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="telefone">Telefone</label>
							<input class="form-control" id="telefone" type="text" name="telefone" value="{{ $cliente->telefone }}" placeholder="Telefone do cliente" maxlength="15">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="cpf">CPF</label>
							<input disabled class="form-control disabled" id="cpf" type="text" name="cpf" value="{{ $cliente->cpf }}" placeholder="000.000.000-00">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="cnpj">CNPJ</label>
							<input disabled class="form-control disabled" id="cnpj" type="text" name="cnpj" value="{{ $cliente->cnpj }}" placeholder="00.000.000/0000-00">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-8">
						<div class="form-group">
							<label for="email">E-mail</label>
							<input class="form-control" id="email" type="text" name="email" value="{{ $cliente->email }}" placeholder="exemple@email.com">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="cep">CEP</label>
							<input class="form-control" id="cep" type="text" name="cep" value="{{ $cliente->cep }}" placeholder="00000-000">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-10">
						<div class="form-group">
							<label for="endereco">Endereço</label>
							<input class="form-control" id="endereco" type="text" name="endereco" value="{{ $cliente->endereco }}" placeholder="Endereço do cliente">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="num_imovel">Número Imóvel</label>
							<input class="form-control" id="num_imovel" type="number" name="num_imovel" value="{{ $cliente->num_imovel }}" placeholder="nº">
						</div>
					</div>
				</div>

				<div class="form-row my-5">
					<div class="col">
						<button type="button" class="btn btn-primary btn-block">Editar</button>
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
