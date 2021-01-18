<?php

namespace Lnchub\Filemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return auth()->id();
    }
}
