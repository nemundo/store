<?php
namespace Nemundo\Store\Site;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Store\Page\NumberStorePage;
class NumberStoreSite extends AbstractSite {
protected function loadSite() {
$this->title = 'NumberStore';
$this->url = 'NumberStore';
}
public function loadContent() {
(new NumberStorePage())->render();
}
}