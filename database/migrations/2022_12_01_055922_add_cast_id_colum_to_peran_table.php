<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peran', function (Blueprint $table) {
            $table->unsignedBigInteger('cast_id')->after('id')->required(); 
            $table->foreign('cast_id')->references('id')->on('cast')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peran', function (Blueprint $table) {
            $table->dropColumn('cast_id');
        });
    }
};
