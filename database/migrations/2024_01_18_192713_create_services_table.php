<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->string("title");
            $table->text("description");
            $table->text("indications_for_use");
            $table->integer("price")->nullable();
            $table->text("comments")->nullable();
            $table->boolean("isActive")->default("1");
        });

        Schema::table("services", function (Blueprint $table) {
           $table->foreign("category_id")
           ->references("id")
           ->on("service_categories");
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
            $table->dropForeign('category_id');
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('services');
    }
}
