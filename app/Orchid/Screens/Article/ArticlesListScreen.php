<?php

namespace App\Orchid\Screens\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;

class ArticlesListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'articles' => Article::all()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Статьи';
    }

    public function description(): ?string
    {
        return 'Все опубликованные статьи на сайте.';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Создать новую статью')
                ->icon('plus')
                ->method('openarticle')
        ];
    }

    public function openarticle()
    {
        return redirect()->route('platform.newArticle');
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('articles', [
                TD::make('id', 'ID'),
                TD::make('title', 'Заголовок статьи'),
                TD::make('code', "Код страницы"),
                TD::make('created_at', "Дата создания")->sort(),
                TD::make(__('Actions'))
                    ->align(TD::ALIGN_CENTER)
                    ->width('100px')
                    ->render(function (Article $article) {
                        return DropDown::make()
                            ->icon('options-vertical')
                            ->list([

                                Link::make("Открыть статью на сайте")
                                    ->route('article', ['code' => $article->code])
                                    ->icon('list'),

                                Link::make(__('Edit'))
                                    ->route('platform.editArticle', $article->id)
                                    ->icon('pencil'),

                                Button::make(__('Delete'))
                                    ->icon('trash')
                                    ->confirm("Вы действительно хотите удалить эту запись?")
                                    ->method('remove', [
                                        'id' => $article->id,
                                    ]),
                            ]);
                    }),
            ])
        ];

    }

    public function open(Request $request)
    {
        $article = Article::findOrFail($request->get('id'));

    }

    public function remove(Request $request): void
    {
        Article::findOrFail($request->get('id'))->delete();

        Toast::info("Статья была удалена");
    }
}
