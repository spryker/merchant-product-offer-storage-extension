<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FactFinder\Business\Api;

use Generated\Shared\Transfer\QuoteTransfer;

class ApiFacade 
{

    

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\FFSearchResponseTransfer
     */
    public function search(QuoteTransfer $quoteTransfer)
    {
        $factory = (new RequestModelFactory())
//            ->registerBuilder(ApiConstants::REQUEST_MODEL_PAYMENT_INIT, $this->createInitModel())
        ;
        return $factory;
    }

}
