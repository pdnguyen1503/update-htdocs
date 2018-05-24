<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 07:44
 */
require_once SYSTEM_PATH . '/Common/DbDriver.php';

class HomeController {

	function Index() {
		echo 'Hello Index -- Hello 2';
	}

	function SayGoodbye(){
		echo  'Say gb';
	}
}