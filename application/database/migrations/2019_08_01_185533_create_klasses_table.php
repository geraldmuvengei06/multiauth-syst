<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klasses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('year')->nullable();

            $table->timestamp('starts');

            $table->timestamp('ends');

            $table->unsignedInteger('course_id');

            $table->unsignedInteger('department_id')->nullable();

            $table->unsignedInteger('campus_id');

            $table->softDeletes();
            
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
        Schema::dropIfExists('klasses');
    }
}
