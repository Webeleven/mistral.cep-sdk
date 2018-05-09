<?php
/**
 * Created by PhpStorm.
 * User: webeleven
 * Date: 4/11/18
 * Time: 3:28 PM
 */

namespace Webeleven\MistralCepSdk;


/**
 * Class Sdk
 *
 * @package Webeleven\MistralCepSdk
 */
class Sdk extends \Webeleven\PassportSdk\Sdk
{

	/**
	 * @param $zipCode
	 *
	 * @return mixed|\Psr\Http\Message\ResponseInterface
	 */
	public function cep($zipCode){
		return $this->get("api/cep/{$zipCode}");
	}
}