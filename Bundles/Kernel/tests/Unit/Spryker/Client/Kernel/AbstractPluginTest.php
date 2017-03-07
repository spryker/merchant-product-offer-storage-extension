<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Unit\Spryker\Client\Kernel;

use PHPUnit_Framework_TestCase;
use ReflectionClass;
use Spryker\Client\Kernel\AbstractClient;
use Spryker\Client\Kernel\AbstractFactory;
use Unit\Spryker\Client\Kernel\Fixtures\Plugin\FooPlugin;

/**
 * @group Unit
 * @group Spryker
 * @group Client
 * @group Kernel
 * @group AbstractPluginTest
 */
class AbstractPluginTest extends PHPUnit_Framework_TestCase
{

    /**
     * @return void
     */
    public function testGetFactoryShouldReturnInstanceIfExists()
    {
        $plugin = new FooPlugin();

        $pluginReflection = new ReflectionClass($plugin);
        $communicationFactoryProperty = $pluginReflection->getParentClass()->getProperty('factory');
        $communicationFactoryProperty->setAccessible(true);
        $abstractFactoryMock = $this->getMockBuilder(AbstractFactory::class)->disableOriginalConstructor()->getMock();
        $communicationFactoryProperty->setValue($plugin, $abstractFactoryMock);

        $factory = $plugin->getFactory();

        $this->assertInstanceOf(AbstractFactory::class, $factory);
    }

    /**
     * @return void
     */
    public function testGetClientShouldReturnInstanceIfExists()
    {
        $plugin = new FooPlugin();

        $pluginReflection = new ReflectionClass($plugin);
        $communicationFactoryProperty = $pluginReflection->getParentClass()->getProperty('client');
        $communicationFactoryProperty->setAccessible(true);
        $abstractFactoryMock = $this->getMockBuilder(AbstractClient::class)->disableOriginalConstructor()->getMock();
        $communicationFactoryProperty->setValue($plugin, $abstractFactoryMock);

        $client = $plugin->getClient();

        $this->assertInstanceOf(AbstractClient::class, $client);
    }

}
