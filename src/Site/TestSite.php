<?php
namespace Nemundo\Store\Site;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Store\Page\TestPage;
class TestSite extends AbstractSite {
protected function loadSite() {
$this->title = 'Test';
$this->url = 'Test';
}
public function loadContent() {
(new TestPage())->render();
}
}