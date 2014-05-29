<?
require_once 'TeechioModel.php';

class TeechioObject extends TeechioModel{

	private $endpoint;
	private $fields;

	public function __construct() {
		parent::__construct('classes');
	}

}