<?php

namespace Manojkiran\BladeComponents;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Manojkiran\Bladecomponents\Skeleton\SkeletonClass
 */
class BladecomponentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bladecomponents';
    }
}
