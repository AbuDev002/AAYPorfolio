<?php
//$baseurl = "http://localhost/dowork.com/account";
//$mainpage = "/http://localhost/dowork.com";

$dbname = "portfolio";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abbkr";

//date_default_timezone_set("Africa/Lagos");
$tm = time();
//error_reporting(E_ALL);
	

function connectdb()
{
    global $dbname, $dbuser, $dbhost, $dbpass, $conms;
    $conms = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); //connect mysql
    if(!$conms) return false;
    // $condb = @mysql_select_db($dbname);
    // if(!$condb) return false;
    return true;
}

function redirect($url)
{
	header('Location: ' .$url);
	exit;
}

function urlmod($txt){

	$string = strtolower($txt);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    $url = $string;


	return $url;
}
?>