<?php

namespace App\Policies;

use App\User;
use App\NotaFiscal;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotaFiscalPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any nota fiscals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the nota fiscal.
     *
     * @param  \App\User  $user
     * @param  \App\NotaFiscal  $notaFiscal
     * @return mixed
     */
    public function view(User $user, NotaFiscal $notaFiscal)
    {
        //
    }

    /**
     * Determine whether the user can create nota fiscals.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the nota fiscal.
     *
     * @param  \App\User  $user
     * @param  \App\NotaFiscal  $notaFiscal
     * @return mixed
     */
    public function update(User $user, NotaFiscal $notaFiscal)
    {
        //
    }

    /**
     * Determine whether the user can delete the nota fiscal.
     *
     * @param  \App\User  $user
     * @param  \App\NotaFiscal  $notaFiscal
     * @return mixed
     */
    public function delete(User $user, NotaFiscal $notaFiscal)
    {
        //
    }

    /**
     * Determine whether the user can restore the nota fiscal.
     *
     * @param  \App\User  $user
     * @param  \App\NotaFiscal  $notaFiscal
     * @return mixed
     */
    public function restore(User $user, NotaFiscal $notaFiscal)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the nota fiscal.
     *
     * @param  \App\User  $user
     * @param  \App\NotaFiscal  $notaFiscal
     * @return mixed
     */
    public function forceDelete(User $user, NotaFiscal $notaFiscal)
    {
        //
    }
}
