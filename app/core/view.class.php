<?php

/**
 * View
 */
class View {

	/**
	 * View Data
	 */
	private $path;
	private $vars = Array();

	/**
	 * Set Path with Constructor
	 */
	public function __construct($path) {
		$this->path = $path;
	}

	/**
	 * Set View Value
	 */
	public function __set($name, $value) {
		if ($value instanceof View) { 
			$this->{$name} = $value;
			$this->vars[$name] = $this->{$name};
		} else {
			$this->vars[$name] = $value;
		}
	}

	public function __get($name) {
		if (isset($this->{$name})) {
			return $this->{$name};
		} else {
			return $this->vars[$name];
		}
	}

	/**
	 * Render
	 */
	public function __toString() {

		// Filename must exist
		if (!file_exists($this->path)) {
			trigger_error('Path [' . $this->path . '] doesn\'t exist', E_USER_ERROR);
		}

		// Turn Vars into unique variables
		extract($this->vars);

		// Get View Output
		ob_start();
		require($this->path);
		$output = ob_get_contents();
		ob_end_clean();

		// Return Output
		return $output;

	}

}