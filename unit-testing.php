<?php

define('NB_NUMBERS', 10000);

require_once('sort.php');

function display_time_spent($last_time, $message)
{
	$time_spent = number_format(microtime(true) - $last_time, 2);
	echo "$message took $time_spent seconds\n";
	
	return microtime(true);
}

$time = microtime(true);

// Setup data for the tests
for ($i = 0; $i < NB_NUMBERS; $i++)
{
	$sample_array[] = rand();
}
$expected_array = $sample_array;
sort($expected_array);

$time = display_time_spent($time,
	'Generating an array with '.NB_NUMBERS.' numbers');

/**
 * The tests themselves
 */

if (sortWithPHPBuiltin($sample_array) !== $expected_array)
{
	echo "Bad test for sortWithPHPBuiltin()\n";
}
$time = display_time_spent($time, 'sortWithPHPBuiltin()');

if (sortByDirectSelection($sample_array) !== $expected_array)
{
	echo "Bad test for sortByDirectSelection()\n";
	var_dump(sortByDirectSelection($sample_array));
}
$time = display_time_spent($time, 'sortByDirectSelection()');
