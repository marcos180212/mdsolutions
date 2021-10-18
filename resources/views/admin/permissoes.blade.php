@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Permissões</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                    	@foreach(App\Permission::all() as $permission)
                    		<li>{{ Str::upper($permission->description) }}</li>
                    		<ul>
                    			@foreach($permission->users as $user)
                    				<li><a href="{{ route('admin.usuario.edit', $user) }}">{{ Str::words(ucwords($user->name), 2) }}</a></li>
                    			@endforeach
                    		</ul>
                    	@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection