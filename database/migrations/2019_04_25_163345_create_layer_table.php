<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('layer')) {
            Schema::create('layer', function (Blueprint $table) {
                $table->increments('id');
                $table->longText('titleMax')->nullable();
                $table->string('type')->nullable();
                $table->longText('titleMin')->nullable();
                $table->longText('content')->nullable();
                $table->longText('contentOne')->nullable();
                $table->longText('contentTwo')->nullable();
                $table->longText('contentThree')->nullable();
                $table->longText('contentFour')->nullable();
                $table->longText('titleContentOne')->nullable();
                $table->longText('titleContentTwo')->nullable();
                $table->longText('titleContentThree')->nullable();
                $table->longText('titleContentFour')->nullable();
                $table->string('avatarOne')->nullable();
                $table->string('avatarTwo')->nullable();
                $table->string('avatarThree')->nullable();
                $table->string('avatarFour')->nullable();
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
        Schema::dropIfExists('layer');
    }
}
