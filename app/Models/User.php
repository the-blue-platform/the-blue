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
        'email', 'password', 'first_name', 'last_name', 'location',
    ];

    protected $hidden = [
        'password', 'remember_token',
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
}
