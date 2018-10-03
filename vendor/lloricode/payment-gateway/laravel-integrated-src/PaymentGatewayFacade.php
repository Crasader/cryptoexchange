<?php

namespace Lloricode\PaymentGateway;

use Illuminate\Support\Facades\Facade;
/**
 * @see \Collective\Html\HtmlBuilder
 */
class PaymentGatewayFacade extends Facade
{
	/**
        * Get the registered name of the component.
        *
        * @return string
        */
        protected static function getFacadeAccessor()
        {
                return 'lloricodepaymentGateway';
        }
}