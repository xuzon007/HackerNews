
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


// foreach ($route as  $value) {
// $routeName=$value;
// }
$routeName= $route[count($route)-1];
$routeName = explode("?", $routeName);
$routeName = $routeName[0];
if ($routeName!='api') {	
 include("userInterface.php");
}
session_start();
class path
{
	function feed()
	{
		include("newsfeed.php");
	}
	function job()
	{
		include("job.php");
	}
	function ask()
	{
		include("ask.php");
	}
	function newsCategories()
	{
		include('newsCategories.php');
	}
	function shows()
	{
		include('show.php');
	}
	function comments()
	{
		include('Comments.php');
	}
		function login()
	{
		include('login.php');
	}
	function asmt()
	{
		include 'Asmt.php';
	}
	function error()
	{
		echo "<h1>this is error page</h1>";
	}
	function profiles()
	{
		include 'profiles.php';
	}
	

}
$p = new path();
switch($routeName)
{
	case "newsfeed":
		$p->feed();
		break;
	case "job":
		$p->job();
		break;
	case "profiles":
		$p->profiles();
		break;
	
	case 'comments':
		$p->comments();
		break;
		case 'login':
		$p->login();
		break;
	case 'Asmt':
			$p->asmt();
			break;	

	case 'NewStories':
	case 'TopStories':
	case 'BestStories':
		$p->newsCategories();
		break;

	default:
				$p->asmt();
		break;


}


?>
