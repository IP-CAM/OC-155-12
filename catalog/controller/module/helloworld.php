<?php
	/**
	 * Created by PhpStorm.
	 * User: Acer splaa
	 * Name: Andrey
	 * Date: 08.04.2018
	 * Time: 16:18
	 *
	 * Now go to your browser and type the URL: http://localhost/Opencart/index.php?route=module/helloworld
	 */

	class ControllerModuleHelloworld extends Controller
	{
		public function index()
		{
			//include language file

			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') .
				'/template/module/helloworld.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/helloworld.tpl';

			} else {
				$this->template = 'default/template/module/helloworld.tpl';
			}

			$this->language->load('module/helloworld');
			$this->data['heading_title'] = $this->language->get('heading_title');
			$this->data['text_module'] = $this->language->get('text_module');
			$this->data['text_success'] = $this->language->get('text_success');


			//TODO: подключение модели

						$this->load->model('catalog/helloworld');
						$temp=$this->model_catalog_helloworld->function_helloworld();
						$temp_info=$this->model_catalog_helloworld->getInformations();


						$hello_world = $this->model_catalog_helloworld->helloworld();
						$hello_world_new = $this->model_catalog_helloworld->helloworldNew();

						$this->data['temp'] = $this->model_catalog_helloworld->function_helloworld();
						$this->data['temp_info'] = $this->model_catalog_helloworld->getInformations();

						$this->data['hello_world'] = $this->model_catalog_helloworld->helloworld();
						$this->data['hello_world_new'] = $this->model_catalog_helloworld->helloworldNew();

			//$this->data['test_out'] = 'Тестовый вывод с контролера';


			$this->response->setOutput($this->render());
		}

	}