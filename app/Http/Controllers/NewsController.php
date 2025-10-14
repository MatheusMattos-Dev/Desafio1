<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // protege tudo
    }

    public function index(Request $request)
    {
        $term = $request->query('q');
        $news = News::ownedBy(auth()->id())
            ->search($term)
            ->latest('published_at')
            ->latest('id')
            ->paginate(10)
            ->withQueryString();

        return view('news.index', compact('news', 'term'))
            ->with('pageSlug', 'news');
    }

    public function create()
    {
        return view('news.create')
            ->with('pageSlug', 'news');
    }

    public function store(StoreNewsRequest $request)
    {
        auth()->user()->news()->create($request->validated());
        return redirect()->route('news.index')->with('success', 'Notícia criada.');
    }

    public function show(News $news)
    {
        $this->authorize('view', $news);

        return view('news.show', compact('news'))
            ->with('pageSlug', 'news');
    }

    public function edit(News $news)
    {
        $this->authorize('update', $news);

        return view('news.edit', compact('news'))
            ->with('pageSlug', 'news');
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        $this->authorize('update', $news);
        $news->update($request->validated());

        return redirect()->route('news.index')->with('success', 'Notícia atualizada.');
    }

    public function destroy(News $news)
    {
        $this->authorize('delete', $news);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Notícia removida.');
    }
}
