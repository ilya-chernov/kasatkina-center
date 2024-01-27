<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class CategoryService extends Model
{
    use HasFactory;
    use AsSource;

    protected $table = "category_service";

    protected $fillable = [
        "service_id",
        "photo_id"
    ];
}
