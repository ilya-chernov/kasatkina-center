<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use HasFactory;
    use AsSource;

    protected $table = 'articles';

//    protected $casts = [
//        'content' => 'array',
//        'code' => 'array'
//    ];

    protected $fillable = [
      'title',
      'short_description',
      'coverImgUrl',
      'content',
      'code',
      'author_id'
    ];

}
