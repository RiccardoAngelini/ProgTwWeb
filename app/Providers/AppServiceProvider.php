<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('phone', function ($attribute, $value, $parameters, $validator){
            $phoneNumber = preg_replace('/[^0-9]/', '', $value);
            
            // verifica della lungezza  del numero di telefono
            if (strlen($phoneNumber) < 10 || strlen($phoneNumber) > 15) {
                return false;
            }
            return true; 
        });
    }
}
