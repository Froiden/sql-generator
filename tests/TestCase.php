<?php
namespace Froiden\SqlGenerator\Tests;
/**
 * Class TestCase
 * @package Froiden\RestAPI\Tests
 */
class  TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = '';
    protected $directory  = '';

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        config(['sql_generator.defaultDirectory' =>__DIR__.'/sql']);
        $this->directory = __DIR__."/sql";

    }

    public function copyMigration()
    {
        $fileName = '/2016_12_14_085908_test_sql_generator_table.php';
        $source = 'src/migrations'.$fileName;
        $destination = database_path('migrations'.$fileName);

        if(file_exists($destination)){
            unlink($destination);
        }
        copy($source,$destination);
    }

    public function deleteMigration(){
        $fileName = '/2016_12_14_085908_test_sql_generator_table.php';
        $destination = database_path('migrations'.$fileName);

        if(file_exists($destination)){
            unlink($destination);
        }
    }


    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../../../../bootstrap/app.php';
        $app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        return $app;
    }



}