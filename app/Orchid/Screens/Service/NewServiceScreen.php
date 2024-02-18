<?php

namespace App\Orchid\Screens\Service;

use App\Models\ServiceCategories as SC;
use App\Models\Service;
use App\Models\ServicePhoto;
use App\Orchid\Layouts\Service\ImgUploadService;
use App\Orchid\Layouts\Service\ServiceCreateLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class NewServiceScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Создание услуги';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::block(ServiceCreateLayout::class)
                ->title("1. Основная информация")
                ->description("Введите название услуги, её категорию и определите стоимость. Slug-код заполняйте только в случае необходимости, он заполняется системой автоматически")
                ->vertical(),

            Layout::block(ImgUploadService::class)
                ->title("2. Загрузка фотографий для услуги")
                ->description("Эти фотографии будут в карусели или галереи для этой услуги.")
                ->commands(
                    Button::make("Опубликовать")
                        ->method('save')
                        ->type(Color::SUCCESS())
                )
                ->vertical(),

        ];
    }

    public function save(Service $service, Request $request)
    {
        $userData = $request->get('service');
        $userData['mainImgUrl'] = (int)$userData['mainImgUrl'][0];
 //       $gallery = $request->get('gallery');

        if (empty($userData['slug'])) {
            $userData['slug'] = Str::slug($userData['title']);
        }

        if(Service::where("slug", $userData['slug'])->first()) {
            Toast::error("Услуга с данным slug-кодом уже существует. Измените название или поменяйте slug-код.");
            return redirect()->route("platform.newService");
        }

        $res = $service->fill($userData)->save();

//        if (!is_null($gallery) && !is_null($gallery['photos'])) {
//            foreach ($gallery['photos'] as $item) {
//                ServicePhoto::create([
//                    "service_id" => $service->id,
//                    "photo_id" => $item,
//                ]);
//            }
//        }


        if ($res) {
            Toast::info("Услуга создана.");
            return redirect()->route('platform.services');
        }

        return Toast::error("Ошибка создания.");
    }
}
