<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\PriceProductStorage;

use Generated\Shared\Transfer\PriceProductStorageTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Spryker\Client\PriceProductStorage\PriceProductStorageFactory getFactory()
 */
class PriceProductStorageClient extends AbstractClient implements PriceProductStorageClientInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\PriceProductStorageTransfer|null
     */
    public function getPriceProductAbstractStorageTransfer(int $idProductAbstract): ?PriceProductStorageTransfer
    {
        return $this->getFactory()->createPriceAbstractStorageReader()->findPriceAbstractStorageTransfer($idProductAbstract);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $idProductConcrete
     *
     * @return \Generated\Shared\Transfer\PriceProductStorageTransfer|null
     */
    public function getPriceProductConcreteStorageTransfer(int $idProductConcrete): ?PriceProductStorageTransfer
    {
        return $this->getFactory()->createPriceConcreteStorageReader()->findPriceConcreteStorageTransfer($idProductConcrete);
    }
}
