<?php
class BaseModel {
	protected $_db = NULL;
	protected $_dbs = NULL;

	public function __construct() {
		$this->_db = Zend_Registry::get('db');
		$this->_dbs = Zend_Registry::get('dbs');
	}
}