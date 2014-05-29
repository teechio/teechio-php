<?
require_once 'TeechioModel.php';

class User extends TeechioModel{

	private $endpoint;
	private $fields;

	public function __construct() {
		parent::__construct('users');
	}
}
?>