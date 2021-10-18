@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row mb-3 text-center">
		<div class="col">
			<h1>Editar Cadastro</h1>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<h2>Dados do Usuário</h2>
			<form action="{{ route('admin.usuario.update', $user) }}" method="post" accept-charset="utf-8">
				@csrf
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="name">Nome</label>
							<input class="form-control" id="name" type="text" name="name" value="{{ $user->name }}" placeholder="Nome do cliente">
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control" id="email" type="text" name="email" value="{{ $user->email }}" placeholder="Telefone do cliente">
						</div>
					</div>
				</div>
				<div class="form-row text-right">
					<div class="col">
						<button id="reset-password" type="button" class="btn btn-danger">Resetar Senha</button>
						<button type="submit" class="btn btn-success">Atualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form action="{{ route('admin.usuario.permission.edit', $user) }}" method="post">
				@csrf
				<div class="row">
					<div class="col">
						<h2 class="mt-5">Permissões</h2>
						<div class="row scroll-permissions my-3">
							<div class="col">
							@foreach(\DB::table('permissions')->orderBy('description', 'asc')->get() as $permission)
								<div class="form-check">
									@php
									$checked = $user->permissions->contains($permission->id);
									@endphp
									<input name="permissions[]" value="{{ $permission->id }}" @if($checked) checked="" @endif id="{{ Str::slug($permission->description) }}" type="checkbox" class="form-check-input">
									<label for="{{ Str::slug($permission->description) }}" class="form-check-label">{{ strtoupper($permission->description) }}</label>
								</div>
							@endforeach
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col">
						<button type="submit" class="btn btn-danger">Atualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
	$(document).ready(function() {
		$('#reset-password').click(function() {
			$.post("{{ route('admin.usuario.resetPassword', $user) }}", { _token: '{{ csrf_token() }}', _method: 'PATCH' });
		});
	});
</script>
@endsection