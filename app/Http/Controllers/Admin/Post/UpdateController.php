<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Http\Controllers\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post): RedirectResponse
    {
        $data = $request -> validated();

        $this->service->update($post, $data);

        return redirect()->route('admin.post.show', $post->id);
    }
}
