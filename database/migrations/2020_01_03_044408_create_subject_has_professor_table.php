<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectHasProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_has_professor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();
            $table->integer('professor_id')->unsigned();
            $table->boolean('is_active');
            $table->timestamps();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('professor_id')->references('id')->on('professors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subject_has_professor', function (Blueprint $table){
            $table->dropForeign('subject_has_professor_subject_id_foreign');
            $table->dropForeign('subject_has_professor_professor_id_foreign');
        });
        Schema::dropIfExists('subject_has_professor');
    }
}
