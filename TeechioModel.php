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

	public function fetch($id, $options = NULL) {
		$path = TeechioModel::buildPath('get', $options);
		$response = Unirest::get(self::$config['host'].$path."/".$id);
		$this->fields = $response->body;
		if($response->code == 200) {
            return true;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	public function fetchAll($options = NULL) {
		$path = TeechioModel::buildPath('get', $options);
		$response = Unirest::get(self::$config['host'].$path);
		if($response->code == 200) {
            return $response->body;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	public function save($arrayParam, $options = NULL) {
		$path = TeechioModel::buildPath('post', $options);
		$response = Unirest::post(self::$config['host'].self::$endpoint, array( "Content-Type" => "application/json"), json_encode($arrayParam));
		$this->fields = $response->body;
        if($response->code == 200) {
            return true;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	public function update($id, $arrayParam, $options = NULL) {
		$path = TeechioModel::buildPath('update', $options);
		$response = Unirest::put(self::$config['host'].$path."/".$id, array( "Content-Type" => "application/json"), json_encode($arrayParam));
		$this->fields = $response->body;
        if($response->code == 200) {
            return true;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	public function delete($id, $options = NULL) {
		$path = TeechioModel::buildPath('delete', $options);
		$response = Unirest::delete(self::$config['host'].$path."/".$id);
		$this->fields = $response->body;
        if($response->code == 200) {
            return true;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	public function upload($name, $path){
		$response = Unirest::post(self::$config['host']."files/".$name, array( "Content-Type" => "application/octet-stream" ), Unirest::file($path));
		$this->fields = $response->body;
        if($response->code == 200) {
            return true;
        }
        else {
            $lastError = array('status' => $response->code, 'error' => $response->body);
            return false;
        }
	}

	private static function buildPath($method, $options) {
		$path = null;
		if(isset($options['path'])) {
			$path = self::$endpoint . '/' . $options['path'];
		}
		else {
			$path = self::$endpoint;
		}
		return $path;
	}

<<<<<<< HEAD
	public function query($path, $endpoint) {
		$response = Unirest::get(self::$config['host'].self::$endpoint.$path);
		if($response->code == 200) {
            return $response->body;
        }else {
           $lastError = array('status' => $response->code, 'error' => $response->body);
           return false;
        }
	}


}
=======
}
>>>>>>> 140ed1e35fabcc32a4a5a2077238de6e7a5cfb1f
