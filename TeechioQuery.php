<?
require_once 'TeechioModel.php';

class TeechioQuery extends TeechioModel{

	private $path="?";
	private $endpoint;

	public function __construct($endpoint) {
		parent::__construct($endpoint);
	}

	public function search($constraints){
		$this->path .= "query=".json_encode($constraints)."&";
		return $this;
	}

	public function sort($c) {
		$this->path .= "sort=".$s. "&";
		return $this;
	}

	public function limit($n) {
		$this->path .= "limit=".$n. "&";
		return $this;
	}

	public function skip($n) {
		$this->path .= "skip=".$n."&";
		return $this;
	}

	public function get() {
		$this->path = substr($this->path,0,-1);
		return parent::query($this->path, $this->endpoint);
	}
}

?>