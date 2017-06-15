<?php

namespace App\Support;

class SecurityKeeper
{
	public static function getReCapchaSiteKey()
	{
		return env('RECAPCHA_SITE_KEY');
	}

	public static function getReCapchaSecretKey()
	{
		return env('RECAPCHA_SECRET_KEY');
	}
}