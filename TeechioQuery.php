<?
require_once 'TeechioModel.php';

class TeechioQuery extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('modules');
	}

	public function query($endpoint, $array) {
		$this->get($endpoint, "", array('path' => json_encode($array)));
	}

}

?>