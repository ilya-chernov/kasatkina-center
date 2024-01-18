<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesPhoto extends Model
{
    use HasFactory;

    protected $table = "services_photo";

    public $timestamps = false;

    protected $fillable = [
      "service_id",
      "photo_id"
    ];
}
