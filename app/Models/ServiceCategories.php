<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use Orchid\Screen\AsSource;

class ServiceCategories extends Model
{
    use HasFactory;
    use AsSource;

    protected $table = "service_categories";
    public $timestamps = false;

    protected $fillable = [
        "id",
        "title",
        "description",
        "isActive"
    ];

    public function services()
    {
        return $this->hasMany(
            Service::class,
            "category_id", // внешний ключ в таблице услуг
            "id" // локальный ключ в таблице services_categories
        );
    }
}
