<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 0:03
 */

namespace Blue\Models;


use Blue\Models\Resource\Resource;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $connection = 'mysql_news';

    public function get($supplierId)
    {
        return $this->where('supplier_id', $supplierId)->first();
    }

    public function getTags($supplierId)
    {
        $resource = new Resource();
        return $resource->getTags($supplierId);
    }

    public function getViews()
    {
        return DB::connection('mysql_news')
            ->table('news')
            ->join(
                'view',
                'view.news_id', '=', 'news.news_id'
            )
            ->where("news.supplier_id", $this->supplier_id)
            ->sum('view.view');
    }

    public function getLikes()
    {
        return DB::connection('mysql_news')
            ->table('news')
            ->join(
                'like',
                'like.news_id', '=', 'news.news_id'
            )
            ->where("news.supplier_id", $this->supplier_id)
            ->whereNull("like.comment_id")
            ->count();
    }

    public function getComments()
    {
        return DB::connection('mysql_news')
            ->table('news')
            ->join(
                'comment',
                'comment.news_id', '=', 'news.news_id'
            )
            ->where("news.supplier_id", $this->supplier_id)
            ->count();
    }

    public function getNewsCountByTag($tag)
    {
        return DB::connection('mysql_news')
            ->table('news')
            ->where('supplier_id', $this->supplier_id)
            ->where('tag', $tag)
            ->count();
    }
}