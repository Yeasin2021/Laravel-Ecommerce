<?php
namespace App\Design\Patterns\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider{

    public function register(){


        //for front end only
        // $this->app->bind(
        //     'App\Repositories\Frontend\FrontEndInterface',
        //     'App\Repositories\Frontend\FrontEndRepositories',
        // );


        //for admin panel
        $this->app->bind(
            'App\Design\Patterns\Repositories\SingleFeatureInterface',
            'App\Design\Patterns\Repositories\SingleFeatureRepository',
        );
    }


}
