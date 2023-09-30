<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Post\BaseController;
use App\Models\Post;
use Illuminate\View\View;

final class ShowController extends BaseController
{
    public function __invoke(Post $post): View
    {
        return view('admin.post.show', compact('post'));
    }

}
