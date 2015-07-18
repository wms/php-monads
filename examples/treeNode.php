<?php

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
		return $this
			->getParent()
			->getParent()
			->name;
	}
}
