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

class ServiceCreateLayout extends Rows
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
               Input::make("service.title")->title("Название услуги")->required(),
               Relation::make("service.category_id")
                   ->fromModel(SC::class, "title")
                   ->title("Категория")
                    ->required()
           ]),

            Group::make([
                Input::make("service.price")->title("Стоимость")->required(),
                Input::make("service.slug")->title("Адрес страницы (slug)"),

            ]),

            Quill::make('service.description')->title("Общее описание услуги"),
            Quill::make('service.indications_for_use')->title("Показания к применению"),
            Quill::make('service.comments')->title("Примечания специалиста"),

        ];
    }
}
