<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OwnSheetsAddUserIdAndSheetId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('own_sheets', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('sheet_id')->unsigned();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('sheet_id')
                ->references('id')
                ->on('sheets')
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
        Schema::table('own_sheets', function (Blueprint $table) {
            //
        });
    }
}
