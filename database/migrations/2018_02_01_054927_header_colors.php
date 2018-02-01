<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HeaderColors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->enum('header_type', ['white', 'black'])->nullable();
            $table->string('page_head_color')->nullable();
            $table->string('page_head_bread_color')->nullable();
            $table->string('page_head_bread_active_color')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('header_type');
            $table->dropColumn('page_head_color');
            $table->dropColumn('page_head_bread_color');
            $table->dropColumn('page_head_bread_active_color');
        });
    }
}
