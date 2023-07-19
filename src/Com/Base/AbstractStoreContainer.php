<?php

namespace Nemundo\Store\Com\Base;

use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Store\Type\AbstractLargeTextStoreType;

class AbstractStoreContainer extends AbstractHtmlContainer
{

    /**
     * @var AbstractLargeTextStoreType
     */
    public $store;

}