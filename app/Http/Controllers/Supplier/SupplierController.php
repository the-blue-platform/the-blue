<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/26
 * Time: 17:48
 */

namespace Blue\Http\Controllers\Supplier;


use Blue\Http\Controllers\Controller;
use Blue\Models\Resource\Resource;
use Blue\Models\Supplier;

class SupplierController extends Controller
{
    public function index($supplierId)
    {
        $supplier = new Supplier();
        $resource = new Resource();

        $supplier = $supplier->get($supplierId);
        if (!$supplier) {
            return redirect()->back();
        }

        $resource = $resource->getBySupplierId($supplierId);
        $tags = $resource->getTags($resource->resource_id);

        if (!$supplier) {
            return redirect()->back();
        }

        $highlight = $resource->getHighLight(null);
        $popular = $resource->getPopular(null);
        $latestNews = $resource->getLatestNews(null);
        return view('component.supplier.supplier')
            ->with("supplier", $supplier)
            ->with("tags", $tags)
            ->with("highlight", $highlight)
            ->with("news", $popular)
            ->with("latestNews", $latestNews);

    }

    public function getPopularNews($supplier_id, $tag)
    {
        $resource = new Resource();
        $resource = $resource->getBySupplierId($supplier_id);
        $highlight = $resource->getHighLight($tag);
        $popular = $resource->getPopular($tag);
        return view('component.supplier.popular-news')
            ->with("highlight", $highlight)
            ->with("news", $popular);
    }
}