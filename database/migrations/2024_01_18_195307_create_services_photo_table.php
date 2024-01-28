<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_photo', function (Blueprint $table) {
            $table->unsignedBigInteger("service_id");
            $table->unsignedBigInteger("photo_id");
        });

        Schema::table('services_photo', function (Blueprint $table){
            $table->foreign("service_id")
                ->references("id")
                ->on("services")
                ->onDelete('cascade');
        });
    }
    public function down()
    {
         Schema::dropIfExists('services_photo');
    }
}
