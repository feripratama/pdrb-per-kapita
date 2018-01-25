<?php namespace Bantenprov\PdrbPerKapita\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The PdrbPerKapita facade.
 *
 * @package Bantenprov\PdrbPerKapita
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PdrbPerKapita extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pdrb-per-kapita';
    }
}
