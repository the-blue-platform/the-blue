<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 12:15
 */

namespace Blue\Models;


use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $table = 'news_comment';
    protected $connection = 'mysql_news';

    protected $fillable = [
        'user_id', 'news_id', 'body',
    ];

    public function user()
    {
        return $this->belongsTo('Blue\Models\User', 'user_id');
    }
}