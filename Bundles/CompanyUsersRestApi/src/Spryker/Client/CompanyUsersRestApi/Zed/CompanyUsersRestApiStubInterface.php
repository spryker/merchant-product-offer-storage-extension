<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CompanyUsersRestApi\Zed;

use Generated\Shared\Transfer\CompanyUserCollectionTransfer;
use Generated\Shared\Transfer\CompanyUserCriteriaFilterTransfer;
use Generated\Shared\Transfer\CustomerCollectionTransfer;

interface CompanyUsersRestApiStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyUserCriteriaFilterTransfer $criteriaFilterTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUserCollectionTransfer
     */
    public function getCompanyUserCollection(
        CompanyUserCriteriaFilterTransfer $criteriaFilterTransfer
    ): CompanyUserCollectionTransfer;

    /**
     * @param \Generated\Shared\Transfer\CustomerCollectionTransfer $customerCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerCollectionTransfer
     */
    public function getCustomerCollection(
        CustomerCollectionTransfer $customerCollectionTransfer
    ): CustomerCollectionTransfer;
}
