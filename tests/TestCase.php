<?php

declare(strict_types=1);

namespace YiiRocks\SimpleHtmlDom\tests;

use Psr\Container\ContainerInterface;
use YiiRocks\SimpleHtmlDom\SimpleHtmlDomInterface;
use Yiisoft\Config\Config;
use Yiisoft\Config\ConfigPaths;
use Yiisoft\Di\Container;
use Yiisoft\Di\ContainerConfig;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected SimpleHtmlDomInterface $dom;
    private ContainerInterface $container;

    protected function setUp(): void
    {
        parent::setUp();
        $config = new Config(
            new ConfigPaths(dirname(__DIR__), 'config'),
        );
        $containerConfig = ContainerConfig::create()
            ->withDefinitions(
                $config->get('di')
            );
        $this->container = new Container($containerConfig);
        $this->dom = $this->container->get(SimpleHtmlDomInterface::class);
    }
}
