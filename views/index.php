
<?php include("userInterface.php");?>
<?php

// $curl=curl_init();//$curl is going to be data type curl resource
// header("Content-type:application/json");
// curl_setopt($curl, CURLOPT_URL,"https://hacker-news.firebaseio.com/v0/topstories.json?print=pretty");
// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 	//you can store the data on variable after this
// 	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// 	//used for https
// 	$result=curl_exec($curl);
// 	curl_close($curl);
// 	$result=json_decode($result,true);
// 	//
// 	print_r($result); 	
	
ini_set("display_erros",1);
error_reporting(E_ALL);
$route = $_SERVER["REQUEST_URI"];
$route = explode("/",$route);

foreach ($route as  $value) {
	$routeName=$value;
}

session_start();
class path
{
	function home()
	{
		include("home.php");
	}
	function job()
	{
		include("job.php");
	}
	function ask()
	{
		include("ask.php");
	}
	function error()
	{
		echo "<h1>this is error page</h1>";
	}
}

$p = new path();

switch($routeName)
{
	case "job":
		$p->job();
		break;
	case "ask":
		$p->ask();
		break;
	default:
		$p->home();
		break;
}


?>