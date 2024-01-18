<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
