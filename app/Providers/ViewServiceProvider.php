<?php

namespace App\Providers;

use App\Models\Channel;
use App\View\Composers\ChannelsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        //M#5 simplified with partials after code refactor no need for array[]
        View::composer('partials.*', ChannelsComposer::class);

        /*
        //M#1 - Shared with all views
        View::share('channels', Channel::all());

        //M#2 - Shared with all views (with changes for all)
        View::share('channels', Channel::orderBy('name')->get());

        //M#3 - Shared with specific views using composer (Granular Approach)
         View::composer(['channels.list','posts.options'], function($view){
             $view->with('channels', Channel::orderBy('name','desc')->get());
         });

        //M#4 - Shared with specific views using composer (Granular Approach) // with wild card
        View::composer(['channels.*','posts.*'], function($view){
            $view->with('channels', Channel::orderBy('name','desc')->get());
        });

        //M#5 - Using Dedicated class instead of call back (for data intensive logic to be encapsulated) as it wil get Gruesome for your data service provider without it.
        View::composer(['channels.*','posts.*'], ChannelsComposer::class);

        // M#6 - View Creator instead of View Composer - It runs immediately without waiting for view to render
        View::creator(['channels.*','posts.*'], ChannelsComposer::class);

        */
    }
}
