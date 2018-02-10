<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesHasUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_has_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned(); //tu bedzie klucz obcy, unsigned mowi zeby integer byl dodani czyli od 0 lub 1,2,3 itp
            $table->integer('roles_id')->unsigned();
            $table->timestamps();
        });

        //to dodaje klucz obcy do pola users_id i laczy tabele w relacje
        //Schema::table - mowi tam ze bedziemy wykonywac na tabeli rozne operacje - ALTERY
        Schema::table('roles_has_users', function (Blueprint $table) {
            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });
        
        Schema::table('roles_has_users', function (Blueprint $table) {
            $table->foreign('roles_id')
                ->references('id')
                ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_has_users');
    }
}
