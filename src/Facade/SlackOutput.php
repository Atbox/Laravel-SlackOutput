<?php

namespace Atbox\SlackOutput\Facade;

use Illuminate\Support\Facades\Facade;
use Atbox\SlackOutput\Service;

class SlackOutput extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }

}