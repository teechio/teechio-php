<?
require_once 'TeechioModel.php';

class User extends TeechioModel{

	public function __construct() {
		parent::__construct('users');
	}
}
?>