<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['gabarito', 'questões', 'respostas']);
            $table->year('year');
            $table->enum('period', ['1', '2']);
            $table->integer('evaluation_key_id')->unsigned();
            $table->string('download_link');
            $table->string('stored_at');
            $table->integer('subject_id')->unsigned();
            $table->foreign('evaluation_key_id')->references('id')->on('evaluation_keys');
            $table->foreign('subject_id')->references('id')->on('subjects');
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
        Schema::dropIfExists('evaluations');
    }
}
