<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/27
 * Time: 0:03
 */

namespace Blue\Models;


use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $connection = 'mysql_news';

    public function get($supplierId)
    {
        return $this->where('supplier_id', $supplierId)->first();
    }
}