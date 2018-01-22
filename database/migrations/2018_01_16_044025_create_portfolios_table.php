<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('category_id')->default(1);

            $table->string('name')->nullable();
            $table->string('company_name')->nullable();

            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('header_image')->nullable();

            $table->string('main_image')->nullable();
            $table->string('main_color')->nullable();
            $table->string('blot_color')->nullable();

            $table->string('thumb_image')->nullable();
            $table->text('svg')->nullable();
            $table->string('type')->nullable();

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();

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
        Schema::dropIfExists('portfolios');
    }
}
