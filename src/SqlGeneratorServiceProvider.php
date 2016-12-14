<?php

namespace Froiden\SqlGenerator;

use Froiden\SqlGenerator\Console\SqlCommand;
use Illuminate\Support\ServiceProvider;

class SqlGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/sql_generator.php' => config_path("sql_generator.php"),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Register all of sql generator command.
     *
     * @return void
     */
    protected function registerCommands()
    {
        $this->commands('command.generate.sql');

        $this->registerInstallCommand();
    }

    /**
     * @return void
     */
    protected function registerInstallCommand()
    {
        $this->app->singleton('command.generate.sql', function($app) {

            return new SqlCommand();
        });
    }

    /**
     * @return void
     */
    public function provides()
    {
        return [
            'command.generate.sql'
        ];
    }
}
