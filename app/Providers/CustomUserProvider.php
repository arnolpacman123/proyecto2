<?php

namespace App\Providers;

use Closure;
use Illuminate\Auth\EloquentUserProvider as UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Support\Arrayable;


class CustomUserProvider extends UserProvider
{

    /**
     * Overrides the framework defaults validate credentials method
     *
     * @param UserContract $user
     * @param array $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials): bool
    {
        $plain = $credentials['contrasena'];

        // PUT YOUR CUSTOM VALIDATION HERE

        return $this->hasher->check($plain, $user->getAuthPassword());
    }

    public function retrieveByCredentials(array $credentials)
    {
        if (isset($credentials['contrasena'])) {
            unset($credentials['contrasena']);
        }

        return parent::retrieveByCredentials($credentials);
    }

    function retrieveById($identifier)
    {
        return $this->createModel()->newQuery()->where('numero_registro', $identifier)->first();
    }
}
