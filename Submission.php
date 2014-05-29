<?
require_once 'TeechioModel.php';

class Submission extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('submissions');
	}

	public function grading($idSubmission, $score) {
		$this->put($idSubmission, $score, array('path' => $idSubmission . '/score'));
	}

}
?>