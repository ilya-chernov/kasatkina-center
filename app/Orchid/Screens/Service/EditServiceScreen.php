<?php

namespace App\Orchid\Screens\Service;

use App\Models\Article;
use App\Models\Service;
use App\Models\ServiceCategories as SC;
use App\Models\ServicePhoto;
use App\Orchid\Layouts\Service\ImgUploadService;
use App\Orchid\Layouts\Service\ServiceCreateLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EditServiceScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Service $service): iterable
    {
        return [
            "service" => $service,
            "photos" => $service->photos()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактировать услугу';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Удалить услугу')
                ->icon('close')
                ->method('remove')
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
            Layout::block(ServiceCreateLayout::class)
                ->title("Редактирование содержимого услуги")
                ->description("Внесите требуемые изменения и нажмите на \"Сохранить\""),

            Layout::block(ImgUploadService::class)
                ->title("2. Загрузка фотографий для услуги")
                ->description("Эти фотографии будут в карусели или галереи для этой услуги.")
                ->commands(
                    Button::make("Сохранить изменения")
                        ->method('save')
                        ->type(Color::SUCCESS())
                )
        ];
    }

    public function save(Service $service, Request $request)
    {
        $userData = $request->get('service');
        $userData['mainImgUrl'] = (int)$userData['mainImgUrl'][0];
//        $gallery = $request->get('gallery');
//
//        if(count($userData['mainImgUrl']) < 2) {
//            $userData['mainImgUrl'] = (int)$userData['mainImgUrl'][0];
//        } else {
//            $userData['mainImgUrl'] = (int)$userData['mainImgUrl'][1];
//        }
        $service->fill($userData)->save();
//
//        if (!is_null($gallery) && !is_null($gallery['photos'])) {
//            foreach ($gallery['photos'] as $item) {
//                ServicePhoto::create([
//                    "service_id" => $service->id,
//                    "photo_id" => $item,
//                ]);
//            }
//        }
        Toast::info("Услуга была обновлена");
        return redirect()->route('platform.services');
    }

    public function remove(Service $service)
    {
        $service->delete();

        Toast::success("Услуга успешно удалена");

        return redirect()->route('platform.services');
    }
}
