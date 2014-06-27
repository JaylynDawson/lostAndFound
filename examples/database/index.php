<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/app/core/initialize.php');

/**
 * Note that this page does not use a controller which is considered
 * a bad practice. This page is meant to only servre as a demonstration
 * of the three basic ways to use a database db class with SELECT, INSERT
 * and UPDATE Statements
 */

/****************************************
  SELECT Statements
*****************************************/

/**
 * SELECT statements should be written by hand since the db class does not
 * provide an abstraction for them. While generally most developers use single
 * quotes for strings in PHP, it's best to use double quotes for writing SELECT
 * statements because you might want to use single quotes within the SELECT
 * statement. Also, using double quotes allows variable interpolation in PHP
 * as seen below:
 */

$user_id = 1;

// SQL
$sql = "
	SELECT *
	FROM user
	WHERE user_id = '{$user_id}'
	";

// Execute
$results = db::execute($sql);


/****************************************
  INSERT Statements
*****************************************/

/**
 * To make an INSERT Statement, start off by making an associative array where
 * the keys of the array are your table fields and the values are the field's values
 */

$insert_values = [
	'first_name' => 'John',
	'last_name' => 'Smith',
	'email' => 'john@smith.com'
];

/**
 * This next step doesn't seem obvious, but we need it to ensure that
 * the values of the array end up as strings in the eventual INSERT
 * statement. This process isn't done automatically for you because
 * there are some special cases when you don't need it. But until you
 * understand those cases, use it:
 */ 
$insert_values = db::array_in_quotes($insert_values);

// Insert
$results = db::insert('user', $insert_values);

// The results object given to us after the insert will have certain
// qualities that we might want, such as the recent Insert ID
$user_id = $results->insert_id;


/****************************************
  UPDATE Statements
*****************************************/

/**
 * UPDATE Statements work almost exactly like INSERT Statements...
 */

$update_values = [
	'first_name' => 'John',
	'last_name' => 'Smith',
	'email' => 'john@smith.com'
];

$update_values = db::array_in_quotes($update_values);

// Except we need to pass this third argument in that describes
// the condition of how to do the update. In other words we need to pass in
// an SQL "WHERE Clause"
db::update('user', $update_values, "WHERE user_id = '{$user_id}'");