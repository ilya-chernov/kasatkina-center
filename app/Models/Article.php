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

    protected $fillable = [
      'title',
      'short_description',
      'cover_url',
      'content',
      'code',
      'author_id'
    ];

}
