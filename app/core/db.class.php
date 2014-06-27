<?php

/**
 *  db class to implement singleton pattern on top of mysqli
 */
class db extends mysqli {

	/****************************************
	*    MEMBER VARIABLES                   *
	*****************************************/
	
	// Singleton Instance
	private static $mysqli;


	/****************************************
	*    CONSTRUCTOR                        *
	*****************************************/

	/**
	 * Connect to MySQL database
	 */
	private function __construct() {

		// MySQLi Constructor
		@parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		@parent::set_charset('utf8');   
      
		// Non-OO technique ensures compatability with some earlier versions of PHP5
		if (mysqli_connect_errno()) {
			die('Connection Error');
		}
	  
	}


	/****************************************
	*    SINGLETON INSTANCE                 *
	*****************************************/
   
	/**
	 * Singleton Design Pattern
	 */
	public static function get_mysqli() {

		// Singleton
		if (!isset(self::$mysqli)) {
			$class = __CLASS__;
			self::$mysqli = new $class();
		}

		// Return Instance
		return self::$mysqli;

	}

	
	/****************************************
	*    EXECUTE                            *
	*****************************************/
	
	public static function execute($sql) {
	
		// Trim Whitespace
		$sql = trim($sql);
	
		// Get database instance
		$mysqli = self::get_mysqli();
		
		// Execute MySQLi Query
		$results = $mysqli->query($sql);

		// Successful SQL
		if ($results !== FALSE) {
		
			// Create a generic object for results if needed
			if (!($results instanceof mysqli_result)) {
				$results = (object) NULL;
			}
	
			// Add to Results
			$results->affected_rows = $mysqli->affected_rows;
			$results->insert_id = $mysqli->insert_id;
		
			// Return Results
			return $results;
		
		// Failed SQL
		} else {
			exit('SQL Error: ' . $mysqli->error . "<br><br>" . $sql);
		}
	
	}


	/****************************************
	*    INSERTING                          *
	*****************************************/

	/**
	 * Execute Standard INSERT statement
	 */
	public static function insert($table_name, $sql_values) {

		// Make Insert Statement
		$sql = self::make_insert_statement($table_name, $sql_values);

		// Execute Query
		return self::execute($sql);

	}
	
	/**
	 * Execute INSERT statement with ON DUPLICATE KEY UPDATE added
	 */
	public static function insert_duplicate_key_update($table_name, $sql_values, $ommit_keys = NULL) {

		// Make Insert Statement
		$sql = self::make_insert_statement($table_name, $sql_values) . "\r\nON DUPLICATE KEY UPDATE " . self::make_sql_update_values($sql_values, $ommit_keys);

		// Execute Query
		return self::execute($sql);

	}

	/**
	 * Execute INSERT IGNORE statement
	 */
	public static function insert_ignore($table_name, $sql_values) {

		// Make Insert Statement
		$sql = str_replace('INSERT', 'INSERT IGNORE', self::make_insert_statement($table_name, $sql_values));

		// Execute Query
		return self::execute($sql);

	}

	/**
	 * Create Standard INSERT statement
	 */
	private static function make_insert_statement($table_name, $sql_values) {
		return "INSERT INTO `{$table_name}` (`" . implode('`, `', array_keys($sql_values)) . "`) VALUES (" . implode(', ', $sql_values) . ")";
	}


	/****************************************
	*    UPDATING                           *
	*****************************************/

	/**
	 * Execute Standard UPDATE statement
	 */
	public static function update($table_name, $sql_values, $sql_where) {

		// Make Update Statement
		$sql = "UPDATE `{$table_name}` SET " . self::make_sql_update_values($sql_values) . ' ' . $sql_where;

		// Execute Query
		return self::execute($sql);

	}

	/**
	 * Create UPDATE key-value pairs
	 */
	public static function make_sql_update_values($sql_values, $ommit_keys = NULL) {

		// Remove Keys with Null Values
		$sql_values = array_filter($sql_values);
		
		// Set ommit keys to an array no matter what
		$ommit_keys = is_array($ommit_keys) ? $ommit_keys : Array();

		// Remove Omitted Keys
		$sql_values_light = array_diff_key($sql_values, array_flip($ommit_keys));

		// In some cases, ommit keys might eliminate all array entries
		// To ensure that this function returns something that can still
		// be ran in sql, we set the first value back to itself
		if (!count($sql_values_light)) {
			reset($sql_values);
			return key($sql_values) . ' = ' . key($sql_values);
		}

		// Loop values to make query string in UPDATE format
		foreach ($sql_values_light as $key => $value) {
			$sql_array[] .= "`{$key}`={$value}";
		}

		return implode(',', $sql_array);

	}


	/****************************************
	*    UTILITIES                          *
	*****************************************/

	/**
	 * This method wrapps real_escape_string because real_escape_string requires
	 * a database connection already which might not exist. This funciton
	 * starts the database connection and then calls real_escape_string.
	 */
	public static function escape($value) {
		$mysqli = self::get_mysqli();
		return $mysqli->real_escape_string($value);
	}
	
	/**
	 * Surround a value with single quotes or with the string: 'NULL'
	 * This function also escapes value and trims white space. The
	 * $value parameter is pass-by-reference so this function can 
	 * be used as a callback for array_walk.
	 */
	public static function in_quotes($value) {

		// Cast Boolean False
		$value = ($value === FALSE) ? '0' : $value;

		// Return the word NULL or the value wrapped in quotes
		if ($value === '0' || $value === 0 || !empty($value) || (gettype($value) == 'double' && $value == 0))  {
			$value = "'" . self::escape(trim($value)) . "'";
		} else {
			$value = 'NULL';
		}

		return $value;

	}
	
	/**
	 * Apply in_quotes logic to an array. Note that keys beginning with
	 * datetime_ will be ommitted automatically.
	 */
	public static function array_in_quotes($array, $ommit_keys = []) {

		// Loop array and apply in_quotes logic where needed
		foreach ($array as $key => $value) {
			if (!in_array($key, $ommit_keys) && substr($key, 0, strlen('datetime_')) != 'datetime_') {
				$array[$key] = self::in_quotes($value);
			}
		}
		
		return $array;

	}
	
	/**
	 * Turn a mysqli results object into an array where the developer
	 * decides which column of the results set to use as the value.
	 * Optionally, the developer can decide which column to use as
	 * the associative key
	 */
	public static function results_to_array($mysqli_results_object, $column_as_value, $column_as_key = NULL) {
		$results_array = Array();
		while ($row = $mysqli_results_object->fetch_assoc()) {
			if (!empty($column_as_key)) {
				$results_array[$row[$column_as_key]] = $row[$column_as_value];
			} else {
				$results_array[] = $row[$column_as_value];
			}
		}
		return $results_array;
	}
	
	/**
	 * Get the next Auto Increment value of a table
	 */
	public static function auto_increment($table) {
	
		// SQL
		$sql = "SHOW TABLE STATUS LIKE '{$table}'";

		// Execute
		$results = self::execute($sql);
		$row = $results->fetch_assoc();
		return $row['Auto_increment'];
		
	}
	
} 