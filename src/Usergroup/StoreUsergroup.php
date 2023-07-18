<?php

namespace Nemundo\Store\Usergroup;

use Nemundo\User\Usergroup\AbstractUsergroup;

class StoreUsergroup extends AbstractUsergroup
{
    protected function loadUsergroup()
    {
        $this->usergroup = 'Store';
        $this->usergroupId = 'ca44032b-f9ce-4b89-b5c2-033b0f68b299';
    }
}