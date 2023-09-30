<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;

final class EditViewController extends BaseController
{
    public function __invoke(Post $post): View
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
