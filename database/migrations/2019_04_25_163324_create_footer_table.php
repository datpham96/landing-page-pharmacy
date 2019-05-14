<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('footer')) {
            Schema::create('footer', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->string('nameStore')->nullable();
                $table->string('address')->nullable();
                $table->string('avatar')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer');
    }
}
