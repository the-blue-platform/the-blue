<?php
/**
 * Created by IntelliJ IDEA.
 * User: trungvu
 * Date: 2018/07/30
 * Time: 14:55
 */

namespace Blue\Domain\Resource;


class Resource
{
    private $resourceId;
    private $supplierId;

    /**
     * Resource constructor.
     * @param $resourceId
     * @param $supplierId
     */
    public function __construct($resourceId, $supplierId)
    {
        $this->resourceId = $resourceId;
        $this->supplierId = $supplierId;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function getSupplierId()
    {
        return $this->supplierId;
    }

    public function getTags()
    {

    }
}