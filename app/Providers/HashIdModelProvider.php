<?php

namespace projetoautomacao\Providers;

use Illuminate\Support\ServiceProvider;
use projetoautomacao\User;
use Hashids\Hashids;

class HashIdModelProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        User::created(function($user) {
            $generator = new Hashids(User::class, 10);
            $user->usuario_id = $generator->encode($user->id);
            $user->save();
          });
    }
}
