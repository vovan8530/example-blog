<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
 * @property Comment[]|Collection $comments
 *
 */
class Post extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string[]
     */
    protected $withCount = ['userLikes'];

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

    /**
     * @return BelongsToMany
     */
    public function userLikes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
       return $this->hasMany(Comment::class, 'post_id','id');
    }
}
