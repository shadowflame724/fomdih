<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_blocks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('portfolio_id');
            $table->text('content');
            $table->string('color')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('text_align')->nullable();

            $table->string('type');
            $table->integer('order')->nullable();

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
        Schema::dropIfExists('portfolio_blocks');
    }
}
