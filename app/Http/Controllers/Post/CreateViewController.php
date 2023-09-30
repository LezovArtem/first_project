<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;

final class CreateViewController extends BaseController
{
    public function __invoke(): View
    {
        $tags = Tag::all();
        $posts = Post::all();
        $categories = Category::all();

        return view ('post.create', compact('categories', 'tags', 'posts'));
    }
}
