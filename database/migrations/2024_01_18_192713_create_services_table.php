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
            $table->string("slug")->unique();
            $table->text("description");
            $table->text("indications_for_use");
            $table->unsignedInteger("mainImgUrl")->nullable();
            $table->integer("price")->nullable();
            $table->text("comments")->nullable();
            $table->boolean("isActive")->default("1");
        });

        Schema::table("services", function (Blueprint $table) {
           $table->foreign("category_id")
           ->references("id")
           ->on("service_categories")
           ->onDelete('cascade');

            $table->foreign("mainImgUrl")
                ->references("id")
                ->on("attachments")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
