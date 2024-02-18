<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategories;
use Orchid\Screen\AsSource;

class Service extends Model
{
    use HasFactory;
    use AsSource;

    protected $table = "services";

    public $timestamps = false;

    protected $fillable = [
        "id",
        "category_id",
        "title",
        "slug",
        "mainImgUrl",
        "description",
        "indications_for_use",
        "price",
        "comments",
        "isActive"
    ];

    public function category()
    {
        return $this->belongsTo(
            ServiceCategories::class,
            "category_id",
            "id"
        );
    }

    protected $casts = [
        'mainImgUrl' => 'integer',
    ];

    public function attachment() {
        return $this->hasOne(Attachment::class, 'id', 'mainImgUrl');
    }

    public function photos() {
        return $this->hasMany(ServicePhoto::class, "service_id", "id");
    }


}
