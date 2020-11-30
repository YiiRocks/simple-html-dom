# Simple Html Dom Parser for Yii

This extension configures [voku/simple_html_dom](https://github.com/voku/simple_html_dom)

[![Packagist Version](https://img.shields.io/packagist/v/yiirocks/simple-html-dom.svg)](https://packagist.org/packages/yiirocks/simple-html-dom)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/yiirocks/simple-html-dom.svg)](https://php.net/)
[![Packagist](https://img.shields.io/packagist/dt/yiirocks/simple-html-dom.svg)](https://packagist.org/packages/yiirocks/simple-html-dom)
[![GitHub](https://img.shields.io/github/license/yiirocks/simple-html-dom.svg)](https://github.com/yiirocks/simple-html-dom/blob/master/LICENSE)

## Installation

The package could be installed via composer:

```bash
composer require yiirocks/simple-html-dom
```

## Usage

```php
use YiiRocks\SimpleHtmlDom\SimpleHtmlDomInterface;

class Class {
    private SimpleHtmlDomInterface $dom;

    __construct(SimpleHtmlDomInterface $dom) {
            $this->dom = $dom;
    }
}
```

Available options can be found in the [API Readme](https://github.com/voku/simple_html_dom/blob/master/README_API.md).

## Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```bash
./vendor/bin/phpunit
```

[![Code Climate maintainability](https://img.shields.io/codeclimate/maintainability/YiiRocks/simple-html-dom.svg)](https://codeclimate.com/github/YiiRocks/simple-html-dom/maintainability)
[![Codacy branch grade](https://img.shields.io/codacy/grade/b82875701bf54191b7a86069d724f013/master.svg)](https://app.codacy.com/gh/YiiRocks/simple-html-dom)
[![Scrutinizer code quality (GitHub/Bitbucket)](https://img.shields.io/scrutinizer/quality/g/yiirocks/simple-html-dom/master.svg)](https://scrutinizer-ci.com/g/yiirocks/simple-html-dom/?branch=master)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/yiirocks/simple-html-dom/analysis)
