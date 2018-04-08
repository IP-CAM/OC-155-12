<?php
	/**
	 * Created by PhpStorm.
	 * User: User
	 * Date: 06.04.2018
	 * Time: 16:18
	 *
	 * Now go to your browser and type the URL: http://localhost/Opencart/index.php?route=test3/mytest
	 */

	class ControllerTest3Mytest extends Controller
	{
		public function index()
		{


			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') .
				'/template/module/test3/mytest.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/test3/mytest.tpl';

			} else {
				$this->template = 'default/template/module/test3/mytest.tpl';
			}

			$this->load->model('catalog/mytest');
			$temp=$this->model_catalog_mytest->function_mytest();
			$temp_info=$this->model_catalog_mytest->getInformations();
			$temp_hello_world=$this->model_catalog_mytest->getHelloWorldsAll();

			$this->data['temp'] = $this->model_catalog_mytest->function_mytest();
			$this->data['temp_info'] = $this->model_catalog_mytest->getInformations();
			$this->data['hello_world'] = $this->model_catalog_mytest->getHelloWorldsAll();

			$this->response->setOutput($this->render());
		}

	}