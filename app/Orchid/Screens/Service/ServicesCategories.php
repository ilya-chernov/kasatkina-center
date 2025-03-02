<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Models\ServiceCategories as SC;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServicesCategories extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "categories" => SC::all()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Категории услуг';
    }

    public function description(): ?string
    {
        return 'Требуются для формирования разделов категорий услуг на сайте';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Создать категорию')
                ->modal('createNewCategory')
                ->method('createNewCategory')
                ->icon('plus'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('categories', [
                TD::make('id', 'ID'),
                TD::make('title', 'Название'),
                TD::make('description', 'Описание категории'),
                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (SC $category) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Button::make(__('Delete'))
                                    ->icon('trash')
                                    ->confirm("Вы действительно хотите удалить эту категорию? Вместе с ней удалятся все услуги, которые ей принадлежат. Для того, чтобы избежать этого, переназначьте эти услуги в другую категорию.")
                                    ->method('remove', [
                                        'id' => $category->id,
                                    ]),
                            ]);
                    }),
            ]),
            Layout::modal('createNewCategory', [
                Layout::rows([
                    Input::make('title')->required()->title("Название категории"),
                    TextArea::make('description')->required()->title("Описание категории")
                ]),
            ])->title('Создать категорию услуг')
                ->applyButton('Создать')
                ->closeButton('Закрыть')
        ];
    }

    public function remove(Request $request) {
        $req = SC::findOrFail($request->get('id'))->delete();
        if($req) {
            Toast::info("Категория была удалена.");
        } else {
            Toast::error("Ошибка при удалении элемента. Обратитесь к Администратору системы.");
        }
    }
    public function createNewCategory(Request $request)
    {

       if(!empty($request->title) && !empty($request->description)) {
           SC::create([
                "title" => $request->title,
               "description" => $request->description
           ]);
           Toast::info("Категория успешно создана");
       } else {
           Toast::error("Произошла ошибка. Повторите позднее");
       }
    }
}
