<?
require_once 'TeechioModel.php';

class Assessment extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('assessments');
	}

}

?>