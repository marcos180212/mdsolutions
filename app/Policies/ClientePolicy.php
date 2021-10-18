<?php

namespace App\Policies;

use App\User;
use App\Cliente;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any clientes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->permissions->contains(function ($value, $key) {
            return $value->description == 'visualizar clientes';
        });
    }

    /**
     * Determine whether the user can view the cliente.
     *
     * @param  \App\User  $user
     * @param  \App\Cliente  $cliente
     * @return mixed
     */
    public function view(User $user, Cliente $cliente)
    {
        // 
    }

    /**
     * Determine whether the user can create clientes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permissions->contains(function ($value, $key) {
            return $value->description == 'cadastrar clientes';
        });
    }

    /**
     * Determine whether the user can update the cliente.
     *
     * @param  \App\User  $user
     * @param  \App\Cliente  $cliente
     * @return mixed
     */
    public function update(User $user, Cliente $cliente)
    {
        return $user->permissions->contains(function ($value, $key) {
            return $value->description == 'editar clientes';
        });
    }

    /**
     * Determine whether the user can delete the cliente.
     *
     * @param  \App\User  $user
     * @param  \App\Cliente  $cliente
     * @return mixed
     */
    public function delete(User $user, Cliente $cliente)
    {
        //
    }

    /**
     * Determine whether the user can restore the cliente.
     *
     * @param  \App\User  $user
     * @param  \App\Cliente  $cliente
     * @return mixed
     */
    public function restore(User $user, Cliente $cliente)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the cliente.
     *
     * @param  \App\User  $user
     * @param  \App\Cliente  $cliente
     * @return mixed
     */
    public function forceDelete(User $user, Cliente $cliente)
    {
        //
    }
}
