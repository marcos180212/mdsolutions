<?php

namespace App\Policies;

use App\User;
use App\Fornecedor;
use Illuminate\Auth\Access\HandlesAuthorization;

class FornecedorPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any fornecedors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->permissions->contains(function ($value, $key) {
            return $value->description == 'visualizar fornecedores';
        });
    }

    /**
     * Determine whether the user can view the fornecedor.
     *
     * @param  \App\User  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function view(User $user, Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Determine whether the user can create fornecedors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permissions->contains(function ($value, $key) {
            return $value->description == 'cadastrar fornecedores';
        });
    }

    /**
     * Determine whether the user can update the fornecedor.
     *
     * @param  \App\User  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function update(User $user, Fornecedor $fornecedor)
    {
        return $user->permissions->contains(function ($value, $key) {
            return $value->description == 'editar fornecedores';
        });
    }

    /**
     * Determine whether the user can delete the fornecedor.
     *
     * @param  \App\User  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function delete(User $user, Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Determine whether the user can restore the fornecedor.
     *
     * @param  \App\User  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function restore(User $user, Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the fornecedor.
     *
     * @param  \App\User  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function forceDelete(User $user, Fornecedor $fornecedor)
    {
        //
    }
}
