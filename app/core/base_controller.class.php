<?php

/**
 * Base Controller
 */
abstract class BaseController {

	/**
	 * Controller View
	 */
	public $view = 'set_view() needs to assign a variable to $view';
	abstract protected function set_view();

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->set_view();
	}

	/**
	 * Render
	 */
	protected function render() {
		echo $this->view;
	}

	/**
	 * Destructor (Render)
	 */
	public function __destruct() {
		$this->render();
	}

}