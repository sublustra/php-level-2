<?php

require 'vendor/autoload.php';
require 'DB.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

if(isset($_GET['id'])
	&& ($data = DB::getInstance()->getById(DB::TABLE_IMAGES, $_GET['id'])) 
	){
	$mode = 'one';
	
} else {
	$mode = 'all';
	$data = DB::getInstance()->getById(DB::TABLE_IMAGES);


echo $twig->render('index.twig', [
	'mode' => $mode,
	'data' => $data,

]);