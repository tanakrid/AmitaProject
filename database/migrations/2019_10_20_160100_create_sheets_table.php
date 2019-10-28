<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetsTable extends Migration
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
            $table->string('sheet_name', 50);
            $table->string('sheet_type', 50);
            $table->string('autor_name', 50);
            $table->string('subject_id', 50);
            $table->string('sec_number', 3)->nullable($value = true);
            $table->string('sheet_src', 100);
            $table->string('instructor', 50);
            $table->double('price', 8, 2)->unsigned()->default(0);
            // $table->enum('rating', ['GOOD', 'NORMAL', 'BAD']);
            $table->string('rating', 10);
            $table->integer('view_count')->default(0);
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
