<?php

declare(strict_types=1);

use voku\helper\DomParserInterface;
use voku\helper\HtmlDomParser;

return [
    DomParserInterface::class => static function () {
        return new HtmlDomParser();
    },
];
