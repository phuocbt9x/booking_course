<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'activated',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    protected $with = ['categories',  'author'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    protected static function booted()
    {
        static::creating(function ($post) {
            if (!$post->slug) {
                $post->slug = static::generateUniqueSlug($post->title);
            }
            $post->created_by = auth()->id();
            $post->created_at = now();
        });

        static::updating(function ($post) {
            if (!$post->slug || $post->isDirty('title')) {
                $post->slug = static::generateUniqueSlug($post->title);
            }
            $post->updated_by = auth()->id();
            $post->updated_at = now();
        });

        static::deleting(function ($post) {
            $post->deleted_by = auth()->id();
            $post->save();
        });
    }

    protected static function generateUniqueSlug($title): string
    {
        $slug = Str::slug($title);
        $count = Post::where('slug', 'LIKE', "$slug%")->count();
        return $count > 0 ? "$slug-" . ($count + 1) : $slug;
    }

    public function scopeFilterByName(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function (Builder $q) use ($param) {
            $q->orWhere("name", "like", "%$param%");
        });
    }

    public function scopeFilterBySlug(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function (Builder $q) use ($param) {
            $q->orWhere("slug", "like", "%$param%");
        });
    }

    public function activeStatusLabel(): Attribute
    {
        return Attribute::get(
            fn() => $this->activated
                ? "<span class='badge rounded-pill bg-success'>Active</span>"
                : "<span class='badge rounded-pill bg-danger'>Inactive</span>"
        );
    }

    public function createdDate(): Attribute
    {
        return Attribute::get(fn() => Carbon::parse($this->created_at)->format('F d, Y'));
    }
}
