<?php

namespace App\Policies;

use App\Models\Circuit;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CircuitPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Circuit $circuit): bool
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Circuit $circuit): bool
    {
        //
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Circuit $circuit): bool
    {
        //
        return $user->isAdmin();
    }
    public function deleteAny(User $user): bool
    {
        //
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Circuit $circuit): bool
    {
        //
        return $user->isAdmin();
    }
    public function restoreAny(User $user): bool
    {
        //
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Circuit $circuit): bool
    {
        //
        return $user->isAdmin();
    }
    public function forceDeleteANy(User $user): bool
    {
        //
        return $user->isAdmin();
    }
}
