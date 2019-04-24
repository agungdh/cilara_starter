<?php

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentHook {

	/**
	 * Holds the instance
	 * @var object
	 */
	protected $instance;

	/**
	 * Gets CI instance
	 */
	private function setInstance() {
		$this->instance =& get_instance();
	}

	/**
	 * Loads database
	 */
	private function loadDatabase() {
		$this->instance->load->database(); 
	}

	/**
	 * Returns the instance of the db
	 * @return object
	 */
	private function getDB() {
		return $this->instance->db;
	}

	public function bootEloquent() {

		$this->setInstance();

		$this->loadDatabase();

		$config = $this->getDB();

		$capsule = new Capsule;

		$capsule->addConnection([
			"driver"    => "mysql",
			"host" => getenv('DB_HOST'),
			"database" => getenv('DB_DB'),
			"username" => getenv('DB_USER'),
			"password" => getenv('DB_PASS')
		]);

		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}

}