@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Usuários do Sistema</h1>

			@if(count(\App\User::all()) > 0)
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="col-md-1" scope="col">ID</th>
						<th class="col-md-2" scope="col">Nome</th>
						<th class="col-md" scope="col">Email</th>
					</tr>
				</thead>
				<tbody>
					@php
						$users = \App\User::paginate(10);
					@endphp
					@foreach($users as $user)
					<tr>
						<th scope="row">{{ $user->id }}</th>
						<td>
							<a href="{{ route('admin.usuario.edit', $user) }}" title="">
								{{ \Str::words(ucwords($user->name), 2) }}
							</a>
						</td>
						<td>{{ $user->email }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{ $users->links() }}
			@else
				<p>Nenhum usuário cadastrado.</p>
			@endif
		</div>
	</div>
</div>
@endsection