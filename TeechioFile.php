<?
require_once 'TeechioModel.php';

class TeechioFile extends TeechioModel{

	public function __construct() {
		parent::__construct('files');
	}

	public function upload($name, $path){
		$this->upload($name,$path);
	}

}
?>