<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\View\View;

final class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->paginate(10);

        return view('post.index', compact('posts'));
    }
}
