<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;






class BlueprintServiceProvider extends ServiceProvider

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
<<<<<<< HEAD
        Blueprint::macro('systemColumns', function () {
            $this->timestamp('created_at')->nullable();
            $this->unsignedBigInteger('created_by')->nullable();
            $this->timestamp('updated_at')->nullable();
            $this->unsignedBigInteger('updated_by')->nullable();
            $this->timestamp('deleted_at')->nullable();
            $this->unsignedBigInteger('deleted_by')->nullable();
        });
=======
        //データベース用system_columnsを定義

        //Blueprint::macro('system_columns', function () {
            ///$this->timestamp('created_at')->nullabel();
           // $this->unsignedBigInteger('created_by')->nullabel();
           /// $this->timestamp('updated_at')->nullabel();
           /// $this->unsignedBigInteger('updated_by')->nullabel();
            ///$this->timestamp('deleted_at')->nullabel();
            ///$this->unsignedBigInteger('deleted_by')->nullabel();
      //  });
>>>>>>> 9c99c2314893ad4e2e2f71d11ee82885d8dad12e
    }

}