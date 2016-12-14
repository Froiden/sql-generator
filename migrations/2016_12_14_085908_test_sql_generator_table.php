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
        //
        Schema::create('test_sql_generator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sql_generator_fullName', 100);
            $table->string('sql_generator_email', 150)->unique();
            $table->string('sql_generator_password', 100);
            $table->enum('sql_generator_gender', ['male', 'female']);
            $table->date('sql_generator_date_of_birth')->nullable();
            $table->integer('sql_generator_foreign')->unsigned()->nullable();

            $table->foreign('sql_generator_foreign')
                ->references('id')->on('foreign')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
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
