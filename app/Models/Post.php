<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;



/**
 * Model Post
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $likes
 * @property boolean $is_published
 * @property integer $category_id
 * @property string $main_image
 * @property string $preview_image
 *
 * @property Category $category
 * @property Tag[]|Collection $tags
 *
 */
class Post extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
