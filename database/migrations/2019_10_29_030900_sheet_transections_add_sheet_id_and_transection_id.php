<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SheetTransectionsAddSheetIdAndTransectionId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sheet_transections', function (Blueprint $table) {
            $table->bigInteger('sheet_id')->unsigned();
            $table->bigInteger('transection_id')->unsigned();

            $table->foreign('sheet_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('transection_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sheet_transections', function (Blueprint $table) {
            //
        });
    }
}
