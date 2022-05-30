<?php

namespace Webazin\LaravelPayment;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webazin\LaravelPayment\GatewayResolver
 */
class Gateway extends Facade
{
	/**
	 * The name of the binding in the IoC container.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'gateway';
	}
}
