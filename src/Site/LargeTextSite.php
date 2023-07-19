<?php
namespace Nemundo\Store\Site;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Store\Page\LargeTextStorePage;
class LargeTextSite extends AbstractSite {
protected function loadSite() {
$this->title = 'LargeTextStore';
$this->url = 'LargeTextStore';
}
public function loadContent() {
(new LargeTextStorePage())->render();
}
}