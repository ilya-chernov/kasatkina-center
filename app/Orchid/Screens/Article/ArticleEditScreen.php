<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use App\Orchid\Layouts\Article\ArticleBasicLayout;
use App\Orchid\Layouts\Article\ArticleCreateLayout;
use App\Orchid\Layouts\Article\ArticleEditLayout;
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

class ArticleEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Article $article): iterable
    {
        return [
            'article' => $article
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование статьи';
    }

//    public function description(): ?string
//    {
//        return [];
//    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Удалить статью')
                ->icon('close')
                ->method('remove')
        ];
    }

    public function deleteArticle() {

    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::block(ArticleEditLayout::class)
                ->title("Редактирование содержимого статьи")
                ->description("Внесите требуемые изменения и нажмите на \"Сохранить\"")
                ->commands(
                    Button::make("Cохранить изменения")
                        ->method('save')
                        ->type(Color::DEFAULT())
                ),
        ];
    }

    public function save(Article $article, Request $request)
    {

        $userData = $request->input('article');

        $userData['coverImgUrl'] = $userData['coverImgUrl'][1];

        $article->fill($userData)->save();

        Toast::info("Статья была обновлена");

        return redirect()->route('platform.articles');
    }

    public function remove(Article $article)
    {
        $article->delete();

        Toast::info("Статья успешно удалена");

        return redirect()->route('platform.articles');
    }
}
