<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MessageBrokerExtension\Dependency\Plugin;

use Spryker\Zed\MessageBrokerAws\Communication\Plugin\MessageBroker\Receiver\AwsSqsMessageReceiverPlugin;
use Symfony\Component\Messenger\Transport\Receiver\ReceiverInterface;

interface MessageReceiverPluginInterface extends ReceiverInterface
{
    /**
     * @api
     *
     * @return string
     */
    public function getTransportName(): string;
}
