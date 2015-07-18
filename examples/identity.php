<?php

require '../monad.php';

$result = Monad::unit(10)
	->bind(function($value) {
		return $value / 2;
	})
	->bind(function($value) {
		return $value * 5;
	})
	->value();

var_dump($result);
