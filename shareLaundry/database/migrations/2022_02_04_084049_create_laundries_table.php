<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundries', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sort'); //w - 세탁기 d - 건조기
            $table->text('brand'); //samsung
            $table->text('name'); //세탁기1, 세탁기2...
            $table->year('buy_when'); // 구매년도만 (추후변경가능성 있음)
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
        Schema::dropIfExists('laundries');
    }
}
