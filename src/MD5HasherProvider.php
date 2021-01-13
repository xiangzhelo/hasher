<?php

namespace Xiangzhelo\Hasher;

use Illuminate\Support\ServiceProvider;
use Xiangzhelo\Hasher\Events\Timer;

class MD5HasherProvider extends ServiceProvider {

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('my.timer', function () {
            return new Timer();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        //
    }

}
