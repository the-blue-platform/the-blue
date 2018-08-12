<?php

namespace Blue\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $connection = 'mysql_user';

    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'location',
        'work',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getName()
    {
        return "{$this -> first_name} {$this -> last_name}";
    }

    public function isNewsLiked($newsId)
    {
        $like = new Like();
        return $like->isNewsLikedByUser($this->id, $newsId) == null ? false : true;
    }

    public function isCommentLiked($newsId, $commentId)
    {
        $like = new Like();
        return $like->isCommentLikedByUser($this->id, $newsId, $commentId) == null ? false : true;
    }

    public function isFollowing($userId)
    {
        return (boolean)$this->follows()->where('follows_id', $userId)->first();
    }

    public function followers()
    {
        return $this->belongsToMany(self::class, 'followers', 'follows_id', 'user_id')
            ->withTimestamps();
    }

    public function follows()
    {
        return $this->belongsToMany(self::class, 'followers', 'user_id', 'follows_id')
            ->withTimestamps();
    }

    public function posts()
    {
        return $this->hasMany(PostEntity::class);
    }
}
