<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/app/core/initialize.php');

// Controller
class Controller extends AppController {
	public function __construct() {
		parent::__construct();

		// SQL
		$sql = "
			SELECT *
			FROM user
			";

		// Execute
		$results = db::execute($sql);
		
		// Loop Rows
		while ($row = $results->fetch_assoc()) {
			$this->view->users .= '<p>' . $row['first_name'] . '</p>';
		}

	}

}
$controller = new Controller();

// Extract Main Controler Vars
extract($controller->view->vars);

?>

<h1></h1>
<div class="users">
	<?php echo $users; ?>
</div>