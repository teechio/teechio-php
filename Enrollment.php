<?
require_once 'TeechioModel.php';

class Enrollment extends TeechioModel{

	private $fields;
	private $endPoint;

	public function __construct() {
		parent::__construct('enrollments');
	}

	public function enroll($idUser,$idModule) {
		$this->update($idUser, $idModule, array('path' => $idUser . "/in/" . $idModule));
	}

	public function withdraw($idUser,$idModule) {
		$this->delete($idUser,$idModule, array('path' => $idUser."/withdraw/".$idModule));
	}

}