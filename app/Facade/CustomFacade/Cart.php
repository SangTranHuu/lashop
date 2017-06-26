<?php
namespace App\Facade\CustomFacade;

use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Cart';
    }
}
