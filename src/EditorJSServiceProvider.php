<?php

namespace AndreyArtamonov\EditorJS;


use AndreyArtamonov\EditorJS\Console\Commands\InstallResources;
use Illuminate\Support\ServiceProvider;

class EditorJSServiceProvider extends ServiceProvider {
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/editorjs'),
            ], 'editorjs-views');
        }
    }
}
