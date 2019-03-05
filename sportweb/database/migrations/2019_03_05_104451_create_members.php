<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30)->nullable($value = false);
            $table->string('email', 255)->nullable($value = false)->unique();
            $table->string('password')->nullable($value = false);
            $table->string('password_confirmation')->nullable($value = false);
            $table->string('profile_image')->nullable($value = false)->default('/images/no_image.png');
            $table->string('sport_event', 100)->nullable($value = false)->default('未登録');
            $table->integer('sport_event_career')->nullable($value = false)->default('0');
            $table->string('area', 100)->nullable($value = false)->default('未登録');
            $table->integer('sex')->nullable($value = false)->default('0');
            $table->string('introduction', 140)->nullable($value = false)->default('未登録');
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
        Schema::dropIfExists('members');
    }
}
