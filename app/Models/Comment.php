<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Model Comment
 *
 * @property integer $post_id
 * @property integer $user_id
 *
 * @property string $message
 *
 */
class Comment extends Model
{

    protected $table = 'comments';

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param $value
     * @return Carbon
     */
    public function getCreatedAtAttribute($value): Carbon
    {
        return Carbon::parse($value);
    }
}
