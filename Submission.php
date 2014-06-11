<?
require_once 'TeechioModel.php';

class Submission extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('submissions');
	}

	public function grade($idSubmission, $score) {
		$this->put($idSubmission, $score, array('path' => $idSubmission . '/score'));
		if($response->code == 200) {
            return true;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

}
?>