<?
require_once 'TeechioModel.php';

class Material extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('materials');
	}

}