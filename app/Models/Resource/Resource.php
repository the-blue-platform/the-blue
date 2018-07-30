<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 0:03
 */

namespace Blue\Models\Resource;


use Blue\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Resource extends Model
{
    protected $table = 'resource';
    protected $connection = 'mysql_news';

    public function get($resourceId)
    {
        return $this->where('resource_id', $resourceId)->first();
    }

    public function getBySupplierId($supplierId)
    {
        return $this->where('supplier_id', $supplierId)->first();
    }

    public function getTags($resourceId)
    {
        $resource = $this->where("resource_id", $resourceId)->get();
        $results = [];
        $supplier = new Supplier();
        foreach ($resource as $r) {
            array_push($results, $supplier->get($r->supplier_id));
        }

        return $results;
    }

    public function listOfSupplierId()
    {
        return $this->where("resource_id", $this->resource_id)->pluck('supplier_id')->toArray();
    }

    public function getHighLight($tag)
    {
        $date = new Carbon();
        $date->subWeek();

        if (!$tag == null) {
            return DB::connection('mysql_news')
                ->table('news')
                ->join(
                    'view',
                    'view.news_id', '=', 'news.news_id'
                )
                ->whereIn('supplier_id', $this->listOfSupplierId())
                ->where("news.tag", $tag)
                ->where('publish_date', '>', $date->toDateTimeString())
                ->orderBy("view.view", "desc")
                ->first();
        } else {
            return DB::connection('mysql_news')
                ->table('news')
                ->join(
                    'view',
                    'view.news_id', '=', 'news.news_id'
                )
                ->whereIn('supplier_id', $this->listOfSupplierId())
                ->where('publish_date', '>', $date->toDateTimeString())
                ->orderBy("view.view", "desc")
                ->first();
        }
    }

    public function getPopular($tag)
    {
        $date = new Carbon();
        $date->subWeek();

        if (!$tag == null) {
            return DB::connection('mysql_news')
                ->table('news')
                ->join(
                    'view',
                    'view.news_id', '=', 'news.news_id'
                )
                ->whereIn('supplier_id', $this->listOfSupplierId())
                ->where("news.tag", $tag)
                ->where('publish_date', '>', $date->toDateTimeString())
                ->orderBy("view.view", "desc")
                ->skip(1)
                ->take(9)
                ->get();
        } else {
            return DB::connection('mysql_news')
                ->table('news')
                ->join(
                    'view',
                    'view.news_id', '=', 'news.news_id'
                )
                ->whereIn('supplier_id', $this->listOfSupplierId())
                ->where('publish_date', '>', $date->toDateTimeString())
                ->orderBy("publish_date", "desc")
                ->take(9)
                ->get();
        }
    }

    public function getLatestNews($tag)
    {
        $date = new Carbon();
        $date->subWeek();

        if (!$tag == null) {
            return DB::connection('mysql_news')
                ->table('news')
                ->whereIn('supplier_id', $this->listOfSupplierId())
                ->where("news.tag", $tag)
                ->where('publish_date', '>', $date->toDateTimeString())
                ->orderBy("publish_date", "desc")
                ->take(8)
                ->get();
        } else {
            return DB::connection('mysql_news')
                ->table('news')
                ->whereIn('supplier_id', $this->listOfSupplierId())
                ->where('publish_date', '>', $date->toDateTimeString())
                ->orderBy("publish_date", "desc")
                ->take(8)
                ->get();
        }
    }
}