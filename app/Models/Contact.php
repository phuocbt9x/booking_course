<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'name',
        'content',
        'status'
    ];

    public function scopeFilterByName(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function (Builder $q) use ($param) {
            $q->orWhere("name", "like", "%$param%");
        });
    }

    public function scopeFilterByEmail(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function (Builder $q) use ($param) {
            $q->orWhere("email", "like", "%$param%");
        });
    }

    public function scopeFilterByContent(Builder $query, string|null $param)
    {
        $query->when(!empty($param), function (Builder $q) use ($param) {
            $q->orWhere("content", "like", "%$param%");
        });
    }

    public function status(): Attribute
    {
        return Attribute::get(
            fn() => $this->status
                ? "<span class='badge rounded-pill bg-success'>Read</span>"
                : "<span class='badge rounded-pill bg-danger'>Unread</span>"
        );
    }
}
