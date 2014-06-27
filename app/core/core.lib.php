<?php

/**
 * Convert CamelCase to underscore_case
 */
function camelcase_to_underscore($text) {
	$text[0] = strtolower($text[0]);
	$func = create_function('$c', 'return "_" . strtolower($c[1]);');
	return preg_replace_callback('/([A-Z])/', $func, $text);
}