<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ServicePhoto extends Model
{
    use HasFactory;
    use AsSource;

    protected $table = "services_photo";

    public $timestamps = false;

    protected $fillable = [
        "service_id",
        "photo_id"
    ];
}
