<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use Orchid\Screen\Actions\Button;
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
                TD::make('description', 'Описание'),
                TD::make('price', 'Цена'),
            ]),
        ];
    }
}
