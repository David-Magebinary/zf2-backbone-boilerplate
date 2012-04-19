<?php
set_include_path ( get_include_path () . PATH_SEPARATOR . '../lib' . PATH_SEPARATOR . '../src' );
require_once 'Gateful/Main.php';

$gateful->get ( '/api', function ($req, $res) {
	return "Hello world!";
});

$gateful->post ( '/api', function ($req, $res, $id) {
	return array('id' => $id);
});

$gateful->delete ( '/api/:id', function($req, $res, $id) {
	// deleting record with $id
	return array('id' => $id);
});

$gateful->put ( '/api/:id', function($req, $res, $id, $name) {
	// updating $id record with a new $name
	return array('id' => $id);
});

