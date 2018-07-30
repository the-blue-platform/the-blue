<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/26
 * Time: 17:48
 */

namespace Blue\Http\Controllers\Supplier;


use Blue\Http\Controllers\Controller;
use Blue\Models\Supplier;

class SupplierController extends Controller
{
    public function index($supplierId)
    {
        $supplier = new Supplier();
        $resource = $supplier->get($supplierId);
        if (!$resource) {
            return redirect()->back();
        }

        return view('component.supplier.supplier')
            ->with("supplier", $resource);
    }
}