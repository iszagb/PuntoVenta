<?php

namespace App\Policies;

use App\User;
use App\Pedido;
use Illuminate\Auth\Access\HandlesAuthorization;

class PedidoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the pedido.
     *
     * @param  \App\User  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function view(User $user, Pedido $pedido)
    {
        //
    }

    /**
     * Determine whether the user can create pedidos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the pedido.
     *
     * @param  \App\User  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function update(User $user, Pedido $pedido)
    {
        //
    }

    /**
     * Determine whether the user can delete the pedido.
     *
     * @param  \App\User  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->rol == 'gerente';
    }

    /**
     * Determine whether the user can restore the pedido.
     *
     * @param  \App\User  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function restore(User $user, Pedido $pedido)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the pedido.
     *
     * @param  \App\User  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function forceDelete(User $user, Pedido $pedido)
    {
        //
    }
}
