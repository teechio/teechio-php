<?
require_once 'TeechioModel.php';

class TeechioQuery extends TeechioModel{

	public function __construct() {
		parent::__construct('modules');
	}

	public function query($endpoint, $array) {
		$this->get($endpoint, "", array('path' => json_encode($array)));
		if($response->code == 200) {
            return $response->body;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

}

?>