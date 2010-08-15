<?php

function sortWithPHPBuiltin($array)
{
	if (!is_array($array))
	{
		throw new Exception('An array is required');
	}

	$sorted_array = $array;
	sort($sorted_array);

	return $sorted_array;
}

function sortByDirectSelection($array)
{
	if (!is_array($array))
	{
		throw new Exception('An array is required');
	}

	for ($i = 0; $i < count($array) - 1; $i++)
	{
		$min = $i;

		for ($j = $i + 1; $j < count($array); $j++)
		{
			if ($array[$j] < $array[$min])
			{
				$min = $j;
			}
		}
		
		if ($array[$i] !== $array[$min])
		{
			$temp = $array[$i];
			$array[$i] = $array[$min];
			$array[$min] = $temp;
		}
	}

	return $array;
}