<?php

/**
 * User
 */
class User extends Model {

	/**
	 * Insert User. Note that while normally the User class is used in object
	 * context, when creating new users we must use the class in static context
	 * since won't have the opportunity to create the new User without having
	 * a user_id to pass in. 
	 *
	 * Example:
	 * User::insert($values);
	 */
	public static function insert($input) {

		// Note that Server Side validation is not being done here
		// and should be implemented by you


		// Prepare SQL Values
		$sql_values = [
			'user_id' => $input['user_id'],
			'first_name' => $input['first_name'],
			'last_name' => $input['last_name'],
			'email' => $input['email'],
			'password' => $input['password']
		];

		// Ensure values are encompased with quote marks
		$sql_values = db::array_in_quotes($sql_values);

		// Insert
		$results = db::insert('user', $sql_values);
		
		// Get Recent Insert ID
		$user_id = $results->insert_id;

		// Return a new instance of this user as an object
		return new User($user_id);

	}

	/**
	 * Update User. Note that this method is used in object context because
	 * we should already have a user object before we update:
	 *
	 * Example:
	 * $user = new User(1);
	 * $user->update($values);
	 */
	public function update($input) {

		// Note that Server Side validation is not being done here
		// and should be implemented by you


		// Prepare SQL Values
		$sql_values = [
			'first_name' => $input['first_name'],
			'last_name' => $input['last_name'],
			'email' => $input['email'],
			'password' => $input['password']
		];

		// Ensure values are encompased with quote marks
		$sql_values = db::array_in_quotes($sql_values);

		// Insert
		$results = db::insert('user', $sql_values, "WHERE user_id = {$this->user_id}");
		
		// Return a new instance of this user as an object
		return new User($this->user_id);

	}

}