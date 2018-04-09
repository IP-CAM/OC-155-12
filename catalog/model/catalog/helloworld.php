<?php
	/**
	 * Created by PhpStorm.
	 * User: User
	 * Date: 07.04.2018
	 * Time: 7:45
	 */


	class ModelCatalogHelloworld extends Model
	{

		public function function_helloworld()
		{
			return 'function_helloworld modele ModelCatalogHelloworld';
		}

		public function helloworld()
		{
			$helloworld = array();
			$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "hello_world (
			`id` INT(11) NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(255) NOT NULL,
			`image` VARCHAR(255) NOT NULL,
			`link` VARCHAR(255) NOT NULL,
			`text` TEXT NOT NULL,
			PRIMARY KEY(`id`)
		)");
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "hello_world");

			foreach ($query->rows as $result) {
				$helloworld[] = $result;
			}
			return $helloworld;
		}

		public function helloworldNew()
		{
			$helloworld = array();
			$this->db->query("CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "hello_world_1 (
			`id` INT(11) NOT NULL AUTO_INCREMENT,
			`name` VARCHAR(255) NOT NULL,
			`image` VARCHAR(255) NOT NULL,
			`link` VARCHAR(255) NOT NULL,
			`text` TEXT NOT NULL,
			PRIMARY KEY(`id`)
		)");
			$this->db->query("INSERT INTO " . DB_PREFIX . "hello_world_1 (name , image, link, text)
			VALUES(
					'Запись в таблице hello_world_1',  
					'\image\module_image\module_hello_world_image\module_hello_world_image.png',
					'https://ocstore.com/', 
					'testText'
			)");

			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "hello_world_1");

			foreach ($query->rows as $result) {
				$helloworld[] = $result;
			}
			return $helloworld;
		}

		public function getHelloWorldsAll()
		{
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "hello_world_1");

			return $query->rows;
		}

		public function getInformation($test_id)
		{
			$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "information i LEFT JOIN " .
				DB_PREFIX . "information_description id ON (i.information_id = id.information_id) LEFT JOIN " .
				DB_PREFIX . "information_to_store i2s ON (i.information_id = i2s.information_id) WHERE i.information_id = '" .
				(int)$information_id . "' AND id.language_id = '" .
				(int)$this->config->get('config_language_id') . "' AND i2s.store_id = '" .
				(int)$this->config->get('config_store_id') . "' AND i.status = '1'");

			return $query->row;
		}

		public function getInformations()
		{
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information i LEFT JOIN " . DB_PREFIX .
				"information_description id ON (i.information_id = id.information_id) LEFT JOIN " . DB_PREFIX .
				"information_to_store i2s ON (i.information_id = i2s.information_id) WHERE id.language_id = '" .
				(int)$this->config->get('config_language_id') . "' AND i2s.store_id = '" .
				(int)$this->config->get('config_store_id') . "' AND i.status = '1' ORDER BY i.sort_order, LCASE(id.title) ASC");

			return $query->rows;
		}

		public function getInformationLayoutId($information_id)
		{
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_to_layout WHERE information_id = '" .
				(int)$information_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

			if ($query->num_rows) {
				return $query->row['layout_id'];
			} else {
				return $this->config->get('config_layout_information');
			}
		}
	}

?>