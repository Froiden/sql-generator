<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Froiden\SqlGenerator\Tests\TestCase;
class SqlGeneratorTest extends TestCase
{

    //Test create database sql file generate or not
    public function testFileExitOrNot()
    {
        $this->artisan('sql:generate');
        $this->assertTrue(true);
        $this->assertDirectoryExists(database_path('sql'));
        $this->assertFileExists(database_path('sql/database.sql'));
    }

    public function testSqlExitOrNot()
    {
        $this->artisan('sql:generate');
        $content = file_get_contents(database_path('sql/database.sql'));
        $this->assertFileExists(database_path('sql/database.sql'));
    }
}
