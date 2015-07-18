<?php

require 'monad.php';

class Maybe extends Monad {
	public function bind($fn) {
		if ($this->_value === null) {
			return $this;
		}

		return parent::bind($fn);
	}
}
