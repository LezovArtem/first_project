<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Controllers\Post\BaseController;
use Illuminate\Http\RedirectResponse;

final class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request -> validated();

        $this->service->store($data);

        return redirect()->route('admin.post.index');
    }
}
