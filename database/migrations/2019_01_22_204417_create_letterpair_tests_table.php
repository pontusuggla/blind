<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLetterpairTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letterpair_tests', function (Blueprint $table) {
            $table->integer('letterpair_id');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('ended_at')->nullable();
            $table->tinyInteger('success')->nullable();
            $table->foreign('letterpair_id')->references('id')->on('letterpairs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('letterpair_tests');
        Schema::enableForeignKeyConstraints();
    }
}
