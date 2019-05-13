<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PriceProductScheduleGui\Communication\Plugin\ProductManagement;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\ProductManagementExtension\Dependency\Plugin\ProductAbstractEditViewExpanderPluginInterface;

/**
 * @api
 *
 * @method \Spryker\Zed\PriceProductScheduleGui\Communication\PriceProductScheduleGuiCommunicationFactory getFactory()
 */
class ScheduledPriceProductAbstractEditViewExpanderPlugin extends AbstractPlugin implements ProductAbstractEditViewExpanderPluginInterface
{
    /**
     * @api
     *
     * @param array $viewData
     *
     * @return array
     */
    public function expand(array $viewData): array
    {
        return $this->getFactory()
            ->createAbstractProductViewExpander()
            ->expandAbstractProductEditViewData($viewData);
    }
}
