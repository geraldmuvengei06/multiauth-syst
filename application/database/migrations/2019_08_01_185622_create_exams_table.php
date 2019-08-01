<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('student_id');

            $table->unsignedInteger('course_id');

            $table->unsignedInteger('unit_id');
            
            $table->integer('exam')->nullable();

            $table->integer('cat1')->nullable();

            $table->integer('cat2')->nullable();

            $table->integer('average')->nullable();

            $table->char('grade')->nullable();

            $table->enum('status', ['complete', 'incomplete', 'fail']);

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
        Schema::dropIfExists('exams');
    }
}
