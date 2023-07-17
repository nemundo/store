<?php

namespace Nemundo\Store;

use Nemundo\Core\Path\Path;
use Nemundo\Project\AbstractProject;

class StoreProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'Store';
        $this->projectName = 'store';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath('model')
            ->getPath();
    }
}