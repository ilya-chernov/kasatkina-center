<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Article;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ArticleEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('article.title')
                ->type('text')
                ->max(255)
                ->required()
                ->title("Заголовок статьи"),

            TextArea::make('article.short_description')
                ->rows(5)
                ->required()
                ->max(255)
                ->title("Краткое описание (то, что под заголовком)")
                ->placeholder("Мир стал добрее и круче"),

            Input::make('article.code')
                ->type('text')
                ->max(255)
                ->required()
                ->title("Адрес статьи"),


            Upload::make('article.coverImgUrl')
                ->required()
                ->maxFiles(1)
                ->acceptedFiles('image/*')
                ->title('Загрузка главного изображения'),


            Quill::make('article.content'),
        ];
    }
}
