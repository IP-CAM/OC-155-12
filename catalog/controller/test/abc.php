<?php
	/**
	 * Created by PhpStorm.
	 * User: Acer_splaa
	 * Date: 04.04.2018
	 * Time: 9:59
	 */

	/**
	 * Class ControllerTestAbc
	 *
	 * источник:
	 * https://code.tutsplus.com/tutorials/from-beginner-to-advanced-in-opencart-understanding-mvc--cms-21627
	 *
	 * 1. For a controller class name, It should be Like Controller(FolderName)(Filename) . Things to Remember: The first case of folder name and filename must be in uppercase, and don't include file extension as a class name.
	 * 2. The index() is the main function that is executed automatically on controller call
	 * 3. index()  function must be public.
	 * 4. Don't use HTML, JavaScript, or CSS in the controller
	 * Now go to your browser and type the URL: http://localhost/Opencart/index.php?route=test/abc
	 */

	class ControllerTestAbc extends Controller
	{
		public function index()
		{
			echo 'Hello World';
			exit;
		}
	}

?>