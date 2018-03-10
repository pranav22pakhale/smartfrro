<?php


if(!isset($_SESSION)){
	session_start();
}

$mysqli = new mysqli("localhost","root","","adcp");

?>