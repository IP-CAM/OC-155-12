<?php
	/**
	 * Created by PhpStorm.
	 * User: User
	 * Date: 04.04.2018
	 * Time: 9:59

	 *http://localhost/Opencart/index.php?route=test2/myhelloworld
	 */

	class ControllerTest2MyHelloWorld extends Controller
	{
		public function index()
		{
			echo 'camelCaseStyleFile <br>';
			echo 'Hello this is test2/My Hello World Controller!!! ';
		}


	}