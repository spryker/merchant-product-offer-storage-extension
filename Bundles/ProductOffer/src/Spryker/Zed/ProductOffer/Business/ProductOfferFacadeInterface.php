<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductOffer\Business;

use Generated\Shared\Transfer\ProductOfferCollectionTransfer;
use Generated\Shared\Transfer\ProductOfferCriteriaFilterTransfer;
use Generated\Shared\Transfer\ProductOfferTransfer;

interface ProductOfferFacadeInterface
{
    /**
     * Specification:
     * - Returns collection of product offer by provided criteria.
     * - Pagination is controlled with page, maxPerPage, nbResults, previousPage, nextPage, firstIndex, lastIndex, firstPage and lastPage values.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductOfferCriteriaFilterTransfer|null $productOfferCriteriaFilter
     *
     * @return \Generated\Shared\Transfer\ProductOfferCollectionTransfer
     */
    public function find(?ProductOfferCriteriaFilterTransfer $productOfferCriteriaFilter): ProductOfferCollectionTransfer;

    /**
     * Specification:
     * - Creates a product offer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductOfferTransfer $productOfferCriteriaFilter
     *
     * @return \Generated\Shared\Transfer\ProductOfferTransfer
     */
    public function create(ProductOfferTransfer $productOfferCriteriaFilter): ProductOfferTransfer;
}
