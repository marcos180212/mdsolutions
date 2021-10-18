<?php

namespace App\Http\Controllers;

use App\User;
use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // PERMISSOES
    public function permissoes()
    {
        return view('admin.permissoes');
    }


    // USUÁRIOS
    public function usuarios()
    {
        return view('admin.usuarios.index');
    }

    public function usuarioEdit(User $user)
    {
        return view('admin.usuarios.edit', ['user'=>$user]);
    }

    public function usuarioUpdate(Request $request, User $user)
    {
        $user->update($request->except('_token'));

        return back();
    }

    public function usuarioResetPassword(User $user)
    {
        $user->update(['password'=>Hash::make('madseng123')]);
    }

    public function usuarioPermissions(Request $request, User $user)
    {
        // dd($request->input('permissions'));
        $user->permissions()->sync($request->input('permissions'));
        
        return back();
    }
}
