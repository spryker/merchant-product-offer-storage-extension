<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantProductOfferStorage\Communication\Plugin\Event\Listener;

use Orm\Zed\ProductOffer\Persistence\Map\SpyProductOfferTableMap;
use Spryker\Zed\Event\Dependency\Plugin\EventBulkHandlerInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

/**
 * @method \Spryker\Zed\MerchantProductOfferStorage\MerchantProductOfferStorageConfig getConfig()
 * @method \Spryker\Zed\MerchantProductOfferStorage\Business\MerchantProductOfferStorageFacadeInterface getFacade()
 * @method \Spryker\Zed\MerchantProductOfferStorage\Communication\MerchantProductOfferStorageCommunicationFactory getFactory()
 */
class ProductConcreteOffersStoragePublishListener extends AbstractPlugin implements EventBulkHandlerInterface
{
    use TransactionTrait;

    /**
     * @param \Generated\Shared\Transfer\EventEntityTransfer[] $transfers
     * @param string $eventName
     *
     * @return void
     */
    public function handleBulk(array $transfers, $eventName): void
    {
        $concreteSkus = $this->getFactory()
            ->getEventBehaviorFacade()
            ->getEventTransfersAdditionalValues($transfers, SpyProductOfferTableMap::COL_CONCRETE_SKU);

        if (!$concreteSkus) {
            return;
        }

        $this->getFacade()->publishProductConcreteProductOffersStorage($concreteSkus);
    }
}
