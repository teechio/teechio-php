<?
/*
include 'TeechModel.php';
include 'Module.php';
include 'User.php';
include 'Material.php';
include 'Enrollment.php';
include 'Assessment.php';
include 'Assignment.php';

*/
//include 'key.php';

function __autoload($class_name) {
    include $class_name . '.php';
}

//var_dump($config);

$us = new User(); 

/*

Example retrieve

$us->retrieve("517507ffe4b08b7f4335a9f7");
var_dump($us->username);
*/



//Example create


$array = array(
    "username" => "giuseppe_123",
    "password" => "try",
);

$us->create($array, null);
var_dump($us->_id);


/*

Example update

$array = array(
    "username" => "giuseppe_php",
    "password" => "try",
    "try" => "update",
);

$us->update("5385bb6fe4b0c1acb937abdd",$array);
var_dump($us->try);

*/

/*

Example delete
$us->delete("5385bb6fe4b0c1acb937abdd");


---------------------------------------
*/
 
//$mod = new Module();

/* Example create

$array = array(
    "title" => "Big Cities 6",
    "description" => "A course about the most beautiful cities of the world",
);
$mod->create($array);
*/


/* Example retrieve

$mod->retrieve("5385cef0e4b0c1acb937acb7");
var_dump($mod->_id);

*/


/*

Example update

$array = array(
    "title" => "Big Cities 8",
    "description" => "A course about the most beautiful cities of the world.",
);

$mod->update("5385cef0e4b0c1acb937acb7",$array);

*/


/*
 Example delete

$mod->delete("5385cef0e4b0c1acb937acb7");

--------------------------------------------
*/

//$mat = new Material();

/*

Example of simply material

$array = array(
    "title" => "London from Wikipedia",
    "description" => "London is the capital city of England and the United Kingdom. With an estimated 8,308,369 residents in 2012, London is the most populous region, urban zone and metropolitan area in the United Kingdom and is the largest city in the European Union.",
    "type"=>"other",
);

$mat->create($array);
*/


/*

Example of multiple-choice

$multiple = array(
	"London"=> 3,
    "Berlin"=> 0,
    "Rome"=> 0
);

$array = array(
    "title" => "UK capital City",
    "description"=> "Which city is the UK capital?",
    "type"=> "multiple-choice",
    "choices"=> $multiple,
);

$mat->create($array);

*/


/*

Example of Media

$array = array(
    "title" => "London time-lapse",
    "description"=> "Montage of time lapse sequences shot around London by Salman Arif",
    "source"=> "http://www.youtube.com/watch?v=h3iEVDtnTO4",
    "type"=> "media",
);

$mat->create($array);

*/


/*

Example Retrieve

$mat->retrieve("5385e2b8e4b0c1acb937ad7e");
var_dump($mat->title);

*/

/*

Example Delete

$mat->delete("5385e2b8e4b0c1acb937ad7e");

----------------------------

Example enroll

$en = new Enrollment();
$en->enroll("5385cdaee4b0c1acb937aca7","5385cd8ee4b0c1acb937aca5");


*/


/*

Example delete enroll

$en = new Enrollment();
$en->deleteEnroll("5385cdaee4b0c1acb937aca7","5385cd8ee4b0c1acb937aca5");

----------------------------------------------------

Example creatre assessment (insert more exaple)

$array = array(
	"title" => "Percentile assessment",
 	"subject" => "life_sciences",
	"type" => "percentile",
);

$as = new Assessment();
$as->create($array);
*/


/*

Example update

$array = array(
	"title" => "Percentile assessment 2",
 	"subject" => "life_sciences",
	"type" => "percentile",
);

$as = new Assessment();
$as->update("5385fdf7e4b0c1acb937ae95",$array);


Example delete

$as = new Assessment();
$as->delete("5385fdf7e4b0c1acb937ae95");


-------------------------------------------
*/ 

/*
Example create

$array = array(
  "title"=> "UK capital city",
  "material"=>"5270e496e4b024c234210386",
  "module"=>"527116fce4b024c23421039f",
  "assessment"=>"527179c5e4b05d057115b574",
);


$as = new Assignment();
$as->create(array);

*/

/*

Example Retrieve

$as = new Assignment();
$as->retrieve("52717ab1e4b05d057115b580");


Example Update

$array = array(
  "title"=> "UK capital city 3",
  "material"=>"5270e496e4b024c234210386",
  "module"=>"527116fce4b024c23421039f",
  "assessment"=>"527179c5e4b05d057115b574",
);


$as = new Assessments();
$as->update("52717ab1e4b05d057115b580",$array);


Example delete



$as = new Assessment();
$as->delete("51937431e4b08b7f4335ab02");
------------------------------------

Granding submission

$sb = new Submission();

$array = array(
  "score"=>3,
);

$sb->grading("535a27e8e4b08d115517e32e",$array);



/*

Create submission

$array = array(
  "user"=> "517507ffe4b08b7f4335a9f7",
  "assignment"=> "51826febe4b08b7f4335aae9",
  "body"=>"London",
);
$sb = new Submission();
$sb->create($array);


Delete submission

$sb = new Submission();
$sb->delete("535a27e8e4b08d115517e32e");

----------------------------------------

example query

$tq = new TeechQuery();

$array = array(
"taxonomy"=>"activity",
);

$tq->query("materials",$array);

----------------------------------

*/


//$tf= new TeechFile();
//$tf->upload("","");

/*

$ch = curl_init();    
$data = file_get_contents("/var/www/teechio-phpsdk/androidSDK.png");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);

$headers = array(
   "Teech-Application-Id:".$appkey,
   "Teech-REST-API-Key:".$apikey,    
   "Content-Type: application/octet-stream",
);

curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt ($ch, CURLOPT_URL, 'http://api.teech.io/files/pippo.png');

curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt ($ch, CURLOPT_VERBOSE, true);

var_dump(curl_getinfo($ch));
$response = curl_exec($ch); 
     $error    = curl_error($ch);
        if ($error) {
            throw new Exception($error);
        }   
curl_close($ch);



*/




?>