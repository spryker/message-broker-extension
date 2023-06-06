<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MessageBrokerExtension\Dependency\Plugin;

use Generated\Shared\Transfer\HttpRequestTransfer;

interface HttpChannelMessageConsumerRequestExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\HttpRequestTransfer $httpRequestTransfer
     *
     * @return \Generated\Shared\Transfer\HttpRequestTransfer
     */
    public function expand(HttpRequestTransfer $httpRequestTransfer): HttpRequestTransfer;
}
