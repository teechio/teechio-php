<?
require_once 'TeechioModel.php';

class Enrollment extends TeechioModel{

	public function __construct() {
		parent::__construct('enrollments');
	}

	public function enroll($idUser,$idModule) {
		$this->update($idUser, $idModule, array('path' => $idUser . "/in/" . $idModule));
		if($response->code == 200) {
            return true;
        }else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	public function withdraw($idUser,$idModule) {
		$this->delete($idUser,$idModule, array('path' => $idUser."/withdraw/".$idModule));
		if($response->code == 200) {
            return true;
        }else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

}