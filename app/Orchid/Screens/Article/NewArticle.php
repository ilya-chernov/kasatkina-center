<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Orchid\Layouts\Article\ArticleBasicLayout;
use App\Orchid\Layouts\Article\ArticleCreateLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Illuminate\Support\Str;

class NewArticle extends Screen
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
        return 'Создать новую статью';
    }

    public function description(): ?string
    {
        return 'Опубликуйте что-нибудь по-настоящему клёвое :)';
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

            Layout::block(ArticleBasicLayout::class)
                ->title("Подсказка")
                ->description("Введите название статьи и её краткое описание."),

            Layout::block(ArticleCreateLayout::class)
                ->title("Подсказка")
                ->description("Здесь нужно вставить текст статьи и поместить картинки в нужное вам место.")
                ->commands(
                    Button::make("Опубликовать")
                        ->method('save')
                        ->type(Color::SUCCESS())
                ),
        ];
    }

    public function save(Article $article, Request $request)
    {
//        $request->validate([
//            'user.email' => [
//                'required',
//                Rule::unique(User::class, 'email')->ignore($user),
//            ],
//        ]);

        $userData = $request->get('articles');
        $userData['code'] = Str::slug($userData['title']);
        $userData['coverImgUrl'] = $userData['coverImgUrl'][0];

        $article->fill($userData)->save();


        Toast::info("Статья была опубликована на сайте");

        return redirect()->route('platform.articles');

    }
}
