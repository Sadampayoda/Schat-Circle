<?php

namespace App\Providers;

use App\Repositories\Chatting\ChattingRepository;
use App\Repositories\Chatting\ChattingRepositoryInterface;
use App\Repositories\SocialMedia\SocialMediaRepository;
use App\Repositories\SocialMedia\SocialMediaRepositoryInterface;
use App\Repositories\Users\UserRepository;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        

        $this->app->bind(UserRepositoryInterface::class, function($app){
            return new UserRepository();
        });

        $this->app->bind(ChattingRepositoryInterface::class, function($app){
            return new ChattingRepository();
        });

        $this->app->bind(SocialMediaRepositoryInterface::class,function($app){
            return new SocialMediaRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
