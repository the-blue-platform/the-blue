<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/02
 * Time: 22:19
 */

namespace Blue\Entity\View;


use Illuminate\Database\Eloquent\Model;

class ViewEntity extends Model
{

    protected $table = 'view';
    protected $connection = 'mysql_news';

    protected $fillable = [
        'news_id',
    ];

    public function news()
    {
        return $this->belongsTo('Blue\Entity\News\News');
    }
}