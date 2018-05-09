<?php
/**
 * Created by PhpStorm.
 * User: webeleven
 * Date: 4/11/18
 * Time: 5:08 PM
 */

namespace Webeleven\MistralCepSdk;


/**
 * Class TokenService
 *
 * @package Webeleven\MistralCepSdk
 */
class TokenService extends \Webeleven\PassportSdk\TokenService
{

	protected $TOKEN_CACHE_KEY = 'mistral.cep.sdk.token';

}