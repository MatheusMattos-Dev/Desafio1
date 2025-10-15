<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon; // ⬅️ adicione

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'published_at'];

    // ⬇️ ADICIONE: cast para datetime
    protected $casts = [
        'published_at' => 'datetime',
    ];

    // ⬇️ ADICIONE: mutator para converter o valor do form
    public function setPublishedAtAttribute($value): void
    {
        $this->attributes['published_at'] = $value
            ? Carbon::parse($value)
            : null;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, ?string $term)
    {
        if (!$term) return $query;
        $like = '%' . str_replace('%', '\\%', $term) . '%';
        return $query->where(function ($q) use ($like) {
            $q->where('title', 'like', $like)
              ->orWhere('body', 'like', $like);
        });
    }

    public function scopeOwnedBy($query, int $userId)
    {
        return $query->where('user_id', $userId);
    }
}
