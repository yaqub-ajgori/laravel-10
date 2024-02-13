<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getShortContentAttribute()
    {
        $limit = 100;
        $content = Str::words($this->content, $limit, '');
        return Str::limit($content, $limit, '...');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('status', 0);
    }

    public function scopePopular($query)
    {
        return $query->where('views', '>', 100);
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeLatestActivePosts($query)
    {
        return $query->active()->latest();
    }

    public function scopeLatestInactivePosts($query)
    {
        return $query->inactive()->latest();
    }

    public function scopeLatestPopularPosts($query)
    {
        return $query->popular()->latest();
    }

    public function scopeLatestActivePopularPosts($query)
    {
        return $query->active()->popular()->latest();
    }

    public function scopeLatestInactivePopularPosts($query)
    {
        return $query->inactive()->popular()->latest();
    }
}
