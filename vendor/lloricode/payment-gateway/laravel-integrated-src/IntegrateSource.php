<?php

namespace Lloricode\PaymentGateway;

class IntegrateSource
{
	public function requireApi()
        {
                require_once __DIR__.'../../cryptobox.class.php';
        }

	public function requireApiCallback()
        {
                require_once __DIR__.'../../cryptobox.callback.php';
        }
}
