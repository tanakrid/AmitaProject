<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('sheetName', 50);
            $table->string('sheetType', 50);
            $table->string('autorName', 50);
            $table->string('subjectId', 50);
            $table->string('secNumber', 3)->nullable();
            $table->string('sheetSrc', 100);
            $table->string('instructor', 50);
            $table->double('price', 8, 2)->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheets');
    }
}
