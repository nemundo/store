<?php

namespace Nemundo\Store\Com\Paragraph;

use Nemundo\Core\Type\Text\Html;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Store\Com\Base\AbstractStoreContainer;
use Nemundo\Store\Com\Button\LargeTextStoreSiteButton;
use Nemundo\Store\Usergroup\StoreUsergroup;
use Nemundo\User\Usergroup\UsergroupMembership;

class StoreParagraph extends AbstractStoreContainer
{

    public function getContent()
    {

        $div = new ContentDiv($this);
        $div->content = (new Html($this->store->getValue()))->convertHtmlTags()->getValue();

        if ((new UsergroupMembership())->isMemberOfUsergroup(new StoreUsergroup())) {
            $btn = new LargeTextStoreSiteButton($this);
            $btn->store = $this->store;
        }

        return parent::getContent();

    }

}