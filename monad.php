<?php

class Monad {
	protected $_value;

	public function __construct($value) {
		$this->_value = $value;
	}

	public static function unit($value) {
		if ($value instanceof self) {
			return $value;
		}

		return new static($value);
	}

	public function bind($fn) {
		$result = $fn($this->_value);
		return static::unit($result);
	}

	public function value() {
		return $this->_value;
	}
}
