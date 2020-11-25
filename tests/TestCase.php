<?php

declare(strict_types=1);

namespace YiiRocks\SimpleHtmlDom\tests;

use Psr\Container\ContainerInterface;
use Yiisoft\Composer\Config\Builder;
use Yiisoft\Di\Container;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var ContainerInterface $container
     */
    private $container;

    protected function setUp(): void
    {
        parent::setUp();
        $config = require Builder::path('web');
        $this->container = new Container($config);
    }
}
