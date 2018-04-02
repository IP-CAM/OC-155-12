<?php
	class ControllerModuleMyHelloWorld extends Controller {
		protected function index() {

			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/myHelloWorld.tpl')) {
				$this->template = $this->config->get('config_template') . '/template/module/myHelloWorld.tpl';
			} else {
				$this->template = 'default/template/module/myHelloWorld.tpl';
			}

			//подключать модель:
			//$this->load->model('директория_с_моделью/имя_модели');

			//языковой файл:
			//$this->language->load('module/имя_языкового_файла');

			//объявлять переменные:Данная переменная будет видна в шаблоне myHelloWorld.tpl.
			//$this->data['имя_переменной'] = $this->language->get('имя_переменной_из_яз_файла');

			$this->render();
		}
	}
?>