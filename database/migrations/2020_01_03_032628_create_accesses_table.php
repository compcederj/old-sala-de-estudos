<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('access_type_id')->unsigned();
            $table->string('remote_addr');
            $table->string('request_uri');
            $table->string('request_method');
            $table->string('http_user_agent');
            $table->timestamps();
            $table->foreign('access_type_id')->references('id')->on('access_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesses');
    }
}
