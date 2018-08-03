<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/08/02
 * Time: 22:11
 */

namespace Blue\Entity\News;


use Illuminate\Database\Eloquent\Model;

class NewsEntity extends Model
{
    protected $table = 'news';
    protected $connection = 'mysql_news';

    public function view()
    {
        return $this->hasOne('Blue\Entity\View\ViewEntity');
    }
}