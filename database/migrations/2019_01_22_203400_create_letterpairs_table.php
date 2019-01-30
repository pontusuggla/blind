<?php

use App\Letterpair;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateLetterpairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letterpairs', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
//            $table->timestamp('created_at')->useCurrent();
//            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamps();
            $table->integer('difficulty');
            $table->string('letterpair');
            $table->string('answer');
        });

        $data = str_getcsv( file_get_contents(storage_path('data') . '/letterpairs.csv'), "\n");
        foreach( $data as $row ) {
            $row = str_getcsv($row, "\t");
            $letterpair = new Letterpair;
            $letterpair->difficulty = rand(0, 100);
            $letterpair->letterpair = $row[0];
            $letterpair->answer = $row[1];
            $letterpair->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('letterpairs');
        Schema::enableForeignKeyConstraints();
    }
}
