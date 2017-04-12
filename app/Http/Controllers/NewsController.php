<?php

namespace Sijot\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Sijot\Http\Requests\NewsValidator;
use Sijot\News;
use Sijot\Traits\FlashMessage;
use Illuminate\Http\Request;

/**
 * Class NewsController
 *
 * @package Sijot\Http\Controllers
 */
class NewsController extends Controller
{
    use FlashMessage;

    /**
     * The news model for the database.
     *
     * @var News
     */
    private $article;

    /**
     * NewsController constructor.
     *
     * @param News $article
     */
    public function __construct(News $article)
    {
        $this->middleware('auth')->except(['show']);

        $this->article = $article;
    }

    /**
     * @param  int $newsId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($newsId)
    {
        return back();
    }

    /**
     * @param  int NewsValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsValidator $input)
    {
        return back();
    }

    /**
     * Edit a article in the system.
     *
     * @param  NewsValidator $input     The user given input.
     * @param  int           $newsId    The article id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(NewsValidator $input, $newsId)
    {
        $item = $this->article->findOrFail($newsId);

        if ($item->update($input->except(['_token']))) { // The article has been update.
            $this->flashMessage(trans('news.item-edit'), 'success');
        }

        return view();
    }

    /**
     * Show a specific article in the database.
     *
     * @param  int $newsId      The article id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($newsId)
    {
        // TODO: Implement try/catch block
        // TODO: Register route.

        $data['article'] = $this->article->find($newsId);
        $data['title']   = trans('news.title-show', ['title' => $data['article']->title]);

        return view('', $data);
    }

    /**
     * @param  int $newsId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($newsId)
    {
        // TODO: register route.

        try {
            $item = $this->article->findOrFail($newsId);

            if ($item->delete()) {
                $this->flashMessage(trans('news.resource-delete'), 'error');
            }

        } catch (ModelNotFoundException $exception) {
            $this->flashMessage(trans('news.no-resource', ['id' => $newsId]), 'error');
        }

        return back();
    }
}
