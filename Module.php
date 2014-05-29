<?
require_once 'TeechioModel.php';

class Module extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('modules');
	}

}

?>