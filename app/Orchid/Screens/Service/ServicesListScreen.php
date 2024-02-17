<?php

namespace App\Orchid\Screens\Service;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServicesListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            "services" => Service::all()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Список услуг';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Новая услуга')
                ->method('createNewService')
                ->icon('plus'),
        ];
    }

    public function createNewService() {
        return redirect()->route('platform.newService');
    }
    public function layout(): iterable
    {
        return [
            Layout::table('services', [
                TD::make('id', 'ID'),
                TD::make('title', 'Название услуги'),
                TD::make('description', 'Описание')->defaultHidden(true)->width("300"),
                TD::make('price', 'Цена'),
                TD::make('slug', 'Адрес страницы'),
                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Service $service) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([
                                Link::make(__('Edit'))
                                    ->route('platform.editService', $service->id)
                                    ->icon('pencil'),

                                Button::make(__('Delete'))
                                    ->icon('trash')
                                    ->confirm("Вы действительно хотите удалить эту запись?")
                                    ->method('remove', [
                                        'id' => $service->id,
                                    ]),
                            ]);
                    }),
            ]),
        ];
    }

    public function remove(Request $request): void
    {
        $req = Service::findOrFail($request->get('id'))->delete();
        if($req) {
            Toast::info("Услуга была удалена.");
        } else {
            Toast::error("Ошибка при удалении элемента. Обратитесь к Администратору системы.");
        }
    }
}
