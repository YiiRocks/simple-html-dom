<?php

declare(strict_types=1);

namespace YiiRocks\SimpleHtmlDom\tests;

use Psr\Container\ContainerInterface;
use YiiRocks\SimpleHtmlDom\SimpleHtmlDomInterface;
use Yiisoft\Composer\Config\Builder;
use Yiisoft\Di\Container;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected SimpleHtmlDomInterface $dom;
    private ContainerInterface $container;

    protected function setUp(): void
    {
        parent::setUp();
        $config = require Builder::path('common');
        $this->container = new Container($config);
        $this->dom = $this->container->get(SimpleHtmlDomInterface::class);
    }
}
