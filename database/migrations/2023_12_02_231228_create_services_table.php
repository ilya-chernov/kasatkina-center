<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('additional_info');
            $table->integer('price');
            $table->unsignedBigInteger('categoryId');
            $table->boolean('isActive')->default(1);
            $table->timestamps();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('categoryId')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['categoryId']);
        });

        Schema::dropIfExists('services');
        Schema::dropIfExists('categories');
    }
}
