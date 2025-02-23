<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'activated', 'created_by', 'updated_by', 'deleted_by'];

    protected $casts = [
        'activated' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function (Category $category) {
            if (!$category->slug) {
                $category->slug = static::generateUniqueSlug($category->name);
            }
            $category->created_by = auth()->id();
            $category->created_at = now();
        });

        static::updating(function (Category $category) {
            if (!$category->slug || $category->isDirty('name')) {
                $category->slug = static::generateUniqueSlug($category->name);
            }
            $category->updated_by = auth()->id();
            $category->updated_at = now();
        });

        static::deleting(function (Category $category) {
            $category->deleted_by = auth()->id();
            $category->save();
        });
    }

    protected static function generateUniqueSlug(string $name): string
    {
        $slug = Str::slug($name);
        $count = Category::where('slug', 'LIKE', "$slug%")->count();
        return $count > 0 ? "$slug-" . ($count + 1) : $slug;
    }

    public function scopeFilterByName(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function(Builder $q) use ($param) {
            $q->orWhere("name", "like", "%$param%");
        });
    }

    public function scopeFilterBySlug(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function (Builder $q) use ($param) {
            $q->orWhere("slug", "like", "%$param%");
        });
    }

    public function activated(): Attribute
    {
        return Attribute::get(
            fn() => $this->activated
                ? "<span class='badge rounded-pill bg-success'>Active</span>"
                : "<span class='badge rounded-pill bg-danger'>Inactive</span>"
        );
    }
}

