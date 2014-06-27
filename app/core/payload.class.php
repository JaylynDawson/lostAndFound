<?php

/**
 * Payload
 */
class Payload {

	/**
	 * Payload Variables
	 */
	private static $settings;
	private static $css = Array();
	private static $js = Array();


	/****************************************
	  SETTINGS
	*****************************************/

	/**
	 * Set Setting
	 */
	public static function add($name, $value) {
		self::$settings[$name] = ($value === 0) ? '0' : $value;	
	}
	
	/**
	 * Get Settings
	 */
	public static function get_settings() {
		self::add('live_site', LIVE_SITE);
		return json_encode(self::$settings);
	}
		

	/****************************************
	  CSS
	*****************************************/
	
	/**
	 * Add CSS File
	 */
	public static function css($filename) {
		if (!array_key_exists($filename, self::$css)) {
			if (file_exists(ROOT . $filename)) {
				self::$css[$filename] = $filename . '?' . date("ymdHis", filemtime(ROOT . $filename));
			}
		}
	}

	/**
	 * Get CSS Includes
	 */
	public static function get_css() {
		
		// Local CSS of the same name as the file
		$local_css = str_replace('.php', '.css', $_SERVER['SCRIPT_FILENAME']);

		// Local CSS
		$css = self::$css;
		if (file_exists($local_css)) {
			$dirname = pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME);
			$filename = $dirname . '/' . SCRIPT_BASENAME . '.css?' . date("ymdHis", filemtime($local_css));
			$css[] = $filename;
		}

		// Make string of Javascript Includes
		$output = '';
		foreach ($css as $filename) {
			$output .= '<link rel="stylesheet" href="' . $filename . '">';
		}

		return $output;
		
	}

	
	/****************************************
	  JAVASCRIPT
	*****************************************/

	/**
	 * Add JavaScript File
	 */
	public static function js($filename) {
		if (!array_key_exists($filename, self::$js)) {			
			if (file_exists(ROOT . $filename)) {
				self::$js[$filename] = $filename . '?' . date("ymdHis", filemtime(ROOT . $filename));
			}
		}
	}
	
	/**
	 * Get JavaScript Includes
	 */
	public static function get_js() {
 		
		// Local JS of the same name as the file
		$local_js = str_replace('.php', '.js', $_SERVER['SCRIPT_FILENAME']);

		// Local JavaScript
		$js = self::$js;
		if (file_exists($local_js)) {
			$dirname = pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME);
			$filename = $dirname . '/' . SCRIPT_BASENAME . '.js?' . date("ymdHis", filemtime($local_js));
			$js[] = $filename;
		}

		// Make string of Javascript Includes
		$output = '';
		foreach ($js as $filename) {
			$output .= '<script src="' . $filename . '"></script>';
		}
		
		return $output;
		
	}

}