<?php

namespace Webazin\LaravelPayment\Exceptions;

class ConfigFileNotFoundException extends GatewayException {
	protected $code=-105;
	protected $message='فایل تنظیمات یافت نشد.';
}
