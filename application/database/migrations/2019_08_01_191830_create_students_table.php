<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first');

            $table->string('last');

            $table->string('surname')->nullable();

            $table->string('admission_number');

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->timestamp('date_of_admission');

            $table->unsignedInteger('class_id');

            $table->unsignedInteger('course_id');
            
            $table->unsignedInteger('campus_id');

            $table->unsignedInteger('school_id');

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
        Schema::dropIfExists('students');
    }
}
