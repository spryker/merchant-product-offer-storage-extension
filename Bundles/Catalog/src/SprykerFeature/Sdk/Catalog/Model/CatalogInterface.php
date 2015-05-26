<?php

namespace SprykerFeature\Sdk\Catalog\Model;

use SprykerFeature\Sdk\Catalog\Model\Exception\ProductNotFoundException;

interface CatalogInterface
{
    /**
     * @param int $id
     * 
     * @return array
     * @throws ProductNotFoundException
     */
    public function getProductDataById($id);

    /**
     * @param array       $ids
     * @param string|null $indexByKey
     *
     * @return array[]
     * @throws ProductNotFoundException
     */
    public function getProductDataByIds(array $ids, $indexByKey = null);

    /**
     * @param array $product
     * @return array
     */
    public function getSubProducts(array $product);
}
