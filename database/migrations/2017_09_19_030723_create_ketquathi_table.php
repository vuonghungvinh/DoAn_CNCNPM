<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKetquathiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketquathi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mssv', 20);
            $table->integer('diem');
            $table->string('madethi', 20);
            $table->dateTime('thoigian');
            $table->string('dapan', 255);
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
        Schema::dropIfExists('ketquathi');
    }
}
