<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MessageBrokerExtension\Dependecy\Plugin;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Stamp\StampInterface;

/**
 * Use this plugin to decorate messages. Properties from the MessageDecorator need to be initialized during construction.
 *
 * Initialized properties will be available for further processing.
 */
interface MessageDecoratorPluginInterface extends StampInterface
{
    /**
     * @param Envelope $envelope
     *
     * @return Envelope
     */
    public function decorateMessage(Envelope $envelope): Envelope;
}
