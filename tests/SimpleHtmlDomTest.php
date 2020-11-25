<?php

namespace YiiRocks\SimpleHtmlDom\tests;

class SimpleHtmlDomTest extends TestCase
{
    public function testBasic(): void
    {
        $in = '<img src="blank.gif" alt="Test" width="42" height="42">';
        $out = '<img src="blank.gif" alt="Test" class="img-fluid">';
        $this->assertEquals($this->addImgFluidclass($in), $out);

        $in = '<img src="blank.gif" alt="Test" class="test-class" width="42" height="42">';
        $out = '<img src="blank.gif" alt="Test" class="test-class img-fluid">';
        $this->assertEquals($this->addImgFluidclass($in), $out);
    }

    private function addImgFluidclass(string $html): string
    {
        $this->dom->load($html);
        foreach ($this->dom->find('img') as $img) {
            $img->setAttribute('class', implode(' ', array_filter([$img->getAttribute('class'), 'img-fluid'])));
            $img->removeAttribute('width');
            $img->removeAttribute('height');
        }
        return $this->dom->html();
    }
}
