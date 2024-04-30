<?php

namespace App\Services\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    /**
     * @param $data
     * @return void
     */
    public function store($data): void
    {
        try {
            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            $data['main_image'] = Storage::disk('public')->put('posts/image', $data['main_image']);
            $data['preview_image'] = Storage::disk('public')->put('posts/image', $data['preview_image']);

            $post = Post::firstOrcreate($data);

            $post->tags()->attach($tags);
            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500, $exception->getMessage());
        }
    }

    /**
     * @param $data
     * @param $post
     * @return void
     */
    public function update($data, $post): void
    {
        try {
            DB::beginTransaction();

            $tags = $data['tags'];
            unset($data['tags']);

            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('posts/image', $data['main_image']);
            }

            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('posts/image', $data['preview_image']);
            }

            $post->update($data);
            $post->tags()->sync($tags);

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500, $exception->getMessage());
        }
    }

}
