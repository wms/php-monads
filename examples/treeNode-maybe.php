<?php

require '../maybe.php';

class TreeNode {
	public $name;
	protected $_parent;

	public function __construct($name, $parent = null) {
		$this->name   = $name;
		$this->_parent = $parent;
	}

	public function getParent() {
		return $this->_parent;
	}

	public function grandParentName() {
		return Maybe::unit($this)
			->bind(function($me) {
				return $me->getParent();
			})
			->bind(function($parent) {
				return $parent->getParent();
			})
			->bind(function($grandParent) {
				return $grandParent->name;
			})
			->value();
	}
}
