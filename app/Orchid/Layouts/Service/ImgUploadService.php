<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Service;

use App\Models\ServiceCategories as SC;
use App\Orchid\Screens\Service\ServicesCategories;
use Illuminate\Validation\Rules\In;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class ImgUploadService extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
           Group::make([
               Upload::make('service.mainImgUrl')
                   ->maxFiles(1)
                   ->acceptedFiles('image/*')
                   ->title('Загрузка главного изображения'),

               Upload::make('gallery.photos')
                   ->acceptedFiles('image/*')
                   ->title('Загрузка изображений в галерею'),
           ])
        ];
    }
}
