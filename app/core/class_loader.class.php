<?php

/**
 * Class Loader
 */
class ClassLoader {

	/**
	 * Constructor
	 */
	public static function setup() {

		// Setup Include Paths
		$paths = self::get_sub_paths(ROOT . '/app');
		set_include_path(implode(PATH_SEPARATOR, $paths));

		// SPL Autoloader
		spl_autoload_register('self::load');

	}

	/**
	 * Load Class
	 */
	public static function load($class) {
		if ($file = self::class_file_exists($class)) { include($file); }
	}

	/**
	 * Class File Exists
	 */
	private function class_file_exists($class) {
		$paths = explode(PATH_SEPARATOR, get_include_path());
		foreach ($paths AS $path) {
			$class = camelcase_to_underscore($class);
			$file = $path . '/' . $class . '.class.php';
			if (is_file($file)) return $file;
			
		}
		return FALSE;
	}

	/**
	 * Get Sub Paths
	 */
	private static function get_sub_paths($base_path) {
		
		try {

			// Recursive Iterator Iterator
			$rii = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($base_path, FilesystemIterator::SKIP_DOTS), 
				RecursiveIteratorIterator::SELF_FIRST);

		} catch (Exception $e) {
			die($e->getMessage());
		}

		// Start Collecting Sub Paths
		$paths = Array();
		$paths[] = $base_path;
		foreach($rii as $name => $path) {
			if ($path->isDir()) { $paths[] = $path->getPathName(); }  
		}
		return $paths;

	}

}