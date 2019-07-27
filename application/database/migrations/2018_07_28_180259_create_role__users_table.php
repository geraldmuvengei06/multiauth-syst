<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role__users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id')->default(3);
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

         DB::table('role__users')->insert([
            'role_id'=> '1',
            'user_id'=> '1',
        ]);

        DB::table('role__users')->insert([
            'role_id'=> '2',
            'user_id'=> '2',
        ]);

        DB::table('role__users')->insert([
            'role_id'=> '3',
            'user_id'=> '3',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role__users');
    }
}
