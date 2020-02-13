<?php

namespace App\Model;

use App\Model\Tag;
use Carbon\Carbon;
use App\Model\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    /**
     * relation to comments table
     *
     * @return object
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * relation to users table
     *
     * @return object
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * add comment from a post
     *
     * @param string $body
     * @return object
     */
    public function addComment($body)
    {
        $this->comments()->create([
            'user_id' => Auth::user()->id,
            'body' => $body
        ]);
    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month'] ?? '') {
            $query->whereMonth(('created_at'), Carbon::parse($month)->month);
        }

        if ($year = $filters['year'] ?? '') {
            $query->whereYear(('created_at'), $year);
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
