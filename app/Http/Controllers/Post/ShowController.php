<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\View\View;

final class ShowController extends BaseController
{
    public function __invoke(Post $post): View
    {
        return view('post.show', compact('post'));
    }

}
