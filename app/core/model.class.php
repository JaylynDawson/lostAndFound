<?php

/**
 * Abstract Model
 */
abstract class Model {
	
	// Store Model Data
	private $model = Array();


	/****************************************
	  CONSTRUCTOR
	*****************************************/

	public function __construct($id) {
		$this->model = $this->get_model($id);
	}

	public function __get($var) {
		return $this->model[$var];
	}

	public function __toString() {
		return print_r($this->model, TRUE);
	}

	public function is_empty() {
		return empty($this->model);
	}


	/****************************************
	  MODEL TABLE INFO
	*****************************************/
	
	public function get_table() {
		if (!isset(static::$table)) {
			return strtolower(camelcase_to_underscore(get_called_class()));
		} else {
			return static::$table;
		}
	}

	public function get_table_id() {
		if (!isset(static::$table_id)) {
			return strtolower(camelcase_to_underscore(get_called_class()) . '_id');
		} else {
			return static::$table_id;
		}
	}


	/****************************************
	  GET MODEL AND CACHE
	*****************************************/

	/**
	 * Get Model
	 */
	private function get_model($id) {

		// Empty ID
		if (empty($id)) { return NULL; }
	
		// SQL
		$sql = "
			SELECT *
			FROM " . $this->get_table() . "
			WHERE " . $this->get_table_id() . " = '{$id}'
			LIMIT 1
			";

		// Execute and Return
		$results = db::execute($sql);
		return $results->num_rows ? $results->fetch_assoc() : NULL;

	}
	
}
