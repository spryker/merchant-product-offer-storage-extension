<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MinimumOrderValue\Business\Strategies;

class HardThresholdStrategy extends MinimumOrderValueAbstractStrategy implements MinimumOrderValueStrategyInterface
{
    protected const STRATEGY_NAME = 'HardThreshold';

    public function __construct()
    {
        $this->setName(static::STRATEGY_NAME);
        $this->setGroup(static::GROUP_HARD);
    }
}
