<?php

/**
 * Ajax Controller
 */
class AjaxController extends AppController {

	/**
	 * Set View: The view for this controller will be an array and will be
	 * converted to JSON upon render
	 */
	protected function set_view() {
		$this->view = [];
	}

	/**
	 * Render
	 */
	protected function render() {

		// Catch Output Buffer
		$unexpected_output = ob_get_contents();
		ob_end_clean();

		// If Unexected output was found
		if (!empty($unexpected_output)) {
			http_response_code('400');
			exit($unexpected_output);
		}

		// Prepare and Return Response
		echo json_encode($this->view);

	}

}