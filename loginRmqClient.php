#!/usr/bin/php
<?php

require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

class loginRmqClient{
	private $usr;
	private $pw;

	function __construct($u, $p){
		$this->usr = $u;
		$this->pw = $p;
	}

	//verify if user is in db
	function verify(){
		$rmqc = new rabbitMQClient("testRabbitMQ.ini","server");

		$request = array();
		$request['type'] = "login";
		$request['username'] = "$usr";
		$request['password'] = "$pw";
		$response = $rmqc->send_request($request);

		//TODO: Replace below chunk to show if user is verified
		echo "client received response: ".PHP_EOL;
		print_r($response);
		echo "\n\n";

		echo $argv[0]." END".PHP_EOL;
	}
}
//TODO: If user is verified, retrieve information to populate profile
?>