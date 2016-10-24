<?php

namespace Api\Pay;

use Illuminate\Support\ServiceProvider;

class PayProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/pay.php' => config_path('pay.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //注册别名,通过闭包返回对象
        $this->app->singleton('pay',function(){
            return new Pay();
        });
    }
}
