<?php

require_once('sort.php');

// Setup data for the tests
$sample_array = array(53, 914, 230, 785, 121, 350, 567, 631, 11, 827, 180);
$expected_array = $sample_array;
sort($expected_array);

/**
 * The tests themselves
 */

if (sortWithPHPBuiltin($sample_array) !== $expected_array)
{
	echo "Bad test for sortWithPHPBuiltin()\n";
}

if (sortByDirectSelection($sample_array) !== $expected_array)
{
	echo "Bad test for sortByDirectSelection()\n";
	var_dump(sortByDirectSelection($sample_array));
}