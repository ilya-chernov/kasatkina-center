<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Article;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ArticleBasicLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('articles.title')
                ->type('text')
                ->max(255)
                ->required()
                ->title("Заголовок статьи")
                ->placeholder("Произошло что-то клёвое..."),

            TextArea::make('articles.short_description')
                ->rows(5)
                ->required()
                ->max(255)
                ->title("Краткое описание (то, что под заголовком)")
                ->placeholder("Мир стал добрее и круче"),

            Upload::make('articles.coverImgUrl')
                ->required()
                ->maxFiles(1)
                ->acceptedFiles('image/*')
                ->title('Загрузка главного изображения')
        ];
    }
}
