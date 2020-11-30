<?php

declare(strict_types=1);

use YiiRocks\SimpleHtmlDom\SimpleHtmlDomInterface;
use YiiRocks\SimpleHtmlDom\SimpleHtmlDom;

return [
    SimpleHtmlDomInterface::class => static function () {
        return new SimpleHtmlDom();
    },
];
