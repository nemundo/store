<?php

namespace Nemundo\Store\Com\Title;

use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Store\Com\Base\AbstractStoreContainer;
use Nemundo\Store\Com\Button\HtmlStoreSiteButton;
use Nemundo\Store\Com\Button\TextStoreSiteButton;
use Nemundo\Store\Usergroup\StoreUsergroup;
use Nemundo\User\Usergroup\UsergroupMembership;

class StoreTitle extends AbstractStoreContainer
{

    public function getContent()
    {

        $title = new AdminTitle($this);
        $title->content = $this->store->getValue();

        if ((new UsergroupMembership())->isMemberOfUsergroup(new StoreUsergroup())) {
            $btn = new TextStoreSiteButton($this);
            $btn->store = $this->store;
        }

        return parent::getContent();

    }


}