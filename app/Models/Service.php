<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategories;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    public $timestamps = false;

    protected $fillable = [
      "id",
      "category_id",
      "title",
      "description",
      "indications_for_use",
      "price",
      "comments",
      "isActive"
    ];

    public function category() {
        return $this->belongsTo(
          ServiceCategories::class,
          "category_id",
          "id"
        );
    }

}
