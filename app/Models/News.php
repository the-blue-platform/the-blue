<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/25
 * Time: 22:22
 */

namespace Blue\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $connection = 'mysql_news';

    public function getHeadlineNews()
    {
        return $this->where('supplier_id', 3)->orderBy('publish_date', 'desc')->take(3)->get();
    }

    public function getTrendingNewsLeft()
    {
        return $this->where('supplier_id', 3)->orderBy('publish_date', 'desc')->take(3)->get();
    }
}