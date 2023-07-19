<?php
namespace Nemundo\Store\Site;
use Nemundo\Web\Site\AbstractSite;
use Nemundo\Store\Page\TextStorePage;
class TextStoreSite extends AbstractSite {
protected function loadSite() {
$this->title = 'TextStore';
$this->url = 'TextStore';
}
public function loadContent() {
(new TextStorePage())->render();
}
}