<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestSqlGeneratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_test_sql_generator_users', function (Blueprint $table) {
            $table->increments('test_id');
            $table->string('test_name');
            $table->string('test_email')->unique();
            $table->enum('test_gender', ['male', 'female']);
            $table->string('test_password');
            $table->rememberToken();
            $table->timestamps();
        });
        //
        Schema::create('test_test_sql_blogs', function (Blueprint $table) {
            $table->increments('test_id');
            $table->integer('test_userId')->unsigned();
            $table->string('test_userName');
            $table->string('test_title')->unique();
            $table->text('test_blogMsg');
            $table->timestamps();
        });
        Schema::table('test_test_sql_blogs', function($table) {
            $table->foreign('test_userId')->references('test_id')->on('test_sql_generator_')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('test_sql_generator');
    }
}
