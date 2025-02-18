<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'activated', 'created_by', 'updated_by', 'deleted_by'];

    protected $casts = [
        'activated' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($category) {
            if (!$category->slug) {
                $category->slug = static::generateUniqueSlug($category->name);
            }
            $category->created_by = auth()->id();
            $category->created_at = now();
        });

        static::updating(function ($category) {
            if (!$category->slug || $category->isDirty('name')) {
                $category->slug = static::generateUniqueSlug($category->name);
            }
            $category->updated_by = auth()->id();
            $category->updated_at = now();
        });

        static::deleting(function ($category) {
            $category->deleted_by = auth()->id();
            $category->save();
        });
    }

    protected static function generateUniqueSlug($name): string
    {
        $slug = Str::slug($name);
        $count = Category::where('slug', 'LIKE', "$slug%")->count();
        return $count > 0 ? "$slug-" . ($count + 1) : $slug;
    }
}

