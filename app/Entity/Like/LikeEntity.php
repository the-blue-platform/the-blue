<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/08
 * Time: 22:55
 */

namespace Blue\Entity\Like;


use Illuminate\Database\Eloquent\Model;

class LikeEntity extends Model
{
    protected $table = 'like';
    protected $connection = 'mysql_news';

    public function news()
    {
        return $this->belongsTo('Blue\Entity\News\NewsEntity', 'news_id', 'news_id');
    }

}