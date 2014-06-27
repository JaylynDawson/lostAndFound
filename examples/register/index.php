<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/app/core/initialize.php');

// Controller
class Controller extends AppController {
	public function __construct() {
		parent::__construct();

		// Add Files Payload
		Payload::js('/examples/register/register.js');
		Payload::css('/bower_components/ReptileForms/dist/reptileforms.min.css');

		// More code could go here depending on what you want to do with this page



	}

}
$controller = new Controller();

// Extract Main Controler Vars
extract($controller->view->vars);

?>

<form class="reptile-form" action="process_form.php">
	<input type="text" name="first_name" title="First Name" required>
	<input type="text" name="last_name" title="Last Name" required>
	<input type="email" name="email" title="Email" required maxlength="100">
	<input type="password" name="password" title="Password" required>
	<button type="submit">Submit</button>
</form>