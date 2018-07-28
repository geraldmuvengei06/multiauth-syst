<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

         DB::table('users')->insert([
            'name'=> 'Gerald Muvengei',
            'email'=> 'gerald@gmail.com',
            'password'=> Hash::make('gerald'),
            'created_at' =>Now(),
        ]);

        DB::table('users')->insert([
            'name'=> 'Priscy Kanee',
            'email'=> 'priscy@gmail.com',
            'password'=> Hash::make('gerald'),
            'created_at' =>Now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
