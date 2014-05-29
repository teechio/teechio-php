<?
require_once 'TeechioModel.php';

class Assignment extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('assignments');
	}

}

?>