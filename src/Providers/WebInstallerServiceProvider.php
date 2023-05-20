<?php
namespace Luminous\Installer\Providers;

use Illuminate\Support\ServiceProvider;

class WebInstallerServiceProvider extends  ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views','luminous');
    }
    public function register()
    {
        $this->publishFiles();
    }

    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/../assets' => public_path('luminous'),
        ]);
        $this->publishes([
            __DIR__.'/../Views' => base_path('resources/views/luminous/installer'),
        ]);
    }

}
