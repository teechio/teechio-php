<? require_once 'lib/Unirest.php';

class TeechioModel {

	private static $config;
	private $fields;
	private static $endpoint;

	public function __construct($endpoint) {
		self::$config = parse_ini_file('config.ini');
		$this->fields = array();
		self::$endpoint = $endpoint;
		Unirest::defaultHeader("Teech-Application-Id", self::$config['appkey']);
		Unirest::defaultHeader("Teech-REST-API-Key", self::$config['apikey']);
	}

	public function __get($key) {
		return $this->fields->{$key};
	}

	public function retrieve($id, $options = NULL) {
		$path = TeechioModel::buildPath('get', $options);
		$response = Unirest::get(self::$config['host'].$this->path);
		$response->code; // HTTP Status code
		$response->headers; // Headers
		$this->fields = $response->body;
        return true;
	}

	public function create($arrayParam, $options = NULL) {
		$path = TeechioModel::buildPath('post', $options);
		$response = Unirest::post(self::$config['host'].self::$endpoint, array( "Content-Type" => "application/json"), json_encode($arrayParam));
		$response->code; // HTTP Status code
		$response->headers; // Headers
		$this->fields = $response->body;
        return true;
	}

	public function update($id, $arrayParam, $options = NULL) {
		$path = TeechioModel::buildPath('update', $options);
		$response = Unirest::put(self::$config['host'].$this->path, array( "Content-Type" => "application/json"), json_encode($arrayParam));
		$response->code; // HTTP Status code
		$response->headers; // Headers
		$this->fields = $response->body;
        return true;
	}

	public function delete($id, $options = NULL) {
		$path = TeechioModel::buildPath('delete', $options);
		$response = Unirest::delete(self::$config['host'].self::$endpoint."/".$id);
		$response->code; // HTTP Status code
		$response->headers; // Headers
		$this->fields = $response->body;
        return true;
	}

	public function upload($name, $path){
		$response = Unirest::post(self::$config['host']."files/".$name, array( "Content-Type" => "application/octet-stream" ), Unirest::file($path));
		$response->code; // HTTP Status code
		$response->headers; // Headers
		$this->fields = $response->body;
        return true;
	}

	private static function buildPath($method, $options) {
		$path = null;
		if(isset($options['path'])) {
			$path = self::$endpoint . '/' . $options['path'];
		}
		else {
			if($method != 'post') {
				$path = self::$endpoint."/".$id;
			} else {
				$path = self::$endpoint;
			}
		}
		return $path;
	}

}