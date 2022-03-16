<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsToAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_addresses');
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->default(0);
            $table->string('title',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('country',60)->nullable();
            $table->string('city',60)->nullable();
            $table->text('address')->nullable();
            $table->string('latitude',12)->nullable();
            $table->string('longitude',12)->nullable();
            $table->tinyInteger('is_default')->unsigned()->default(0);
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
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
        Schema::table('user_addresses', function (Blueprint $table) {
           Schema::dropIfExists('user_addresses');
        });
    }
}
