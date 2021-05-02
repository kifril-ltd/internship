<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Response;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        return response()->json(News::all());
    }

    public function show(int $id) {
        return response()->json(News::findOrFail($id));
    }

    public function store(CreateNewsRequest $request) {
        $news = News::create($request->only('title', 'content', 'publish_date'));

        return response()->json($news);
    }

    public function update(UpdateNewsRequest $request, int $id) {
        if ($news = News::findOrFail($id)) {
            $news->update($request->only('title', 'content', 'publish_date'));
        }

        return response()->json($news);
    }

    public function destroy(int $id) {
        if ($news = News::findOrFail($id)) {
            $news->delete();
            return response()->json('', Response::HTTP_NO_CONTENT);
        }
    }
}
