<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class PimcorePaymentProviderKlarnaBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    protected function getComposerPackageName(): string
    {
        return 'pimcore/payment-provider-klarna';
    }
}
