<?php

namespace Xiangzhelo\Hasher\Facades;

use Illuminate\Support\Facades\Facade;

class Timer extends Facade {

    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor() {
        return 'timer';
    }

    /**
     * Return the facade accessor.
     *
     * @return Alipay
     */
    public static function timer() {
        return app('my.timer');
    }

}
