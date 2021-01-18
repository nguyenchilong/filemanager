<?php

namespace LongNguyen\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return auth()->id();
    }
}
