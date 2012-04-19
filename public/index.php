<?php
set_include_path ( get_include_path () . PATH_SEPARATOR . '../lib' . PATH_SEPARATOR . '../src' );
require_once 'Gateful/Main.php';

$gateful->get ( '/api', function ($req, $res) {
	// read all records
	return [['id' => '1', 'name' => 'Jhon Doe']];
} );

$gateful->post ( '/api', function ($req, $res, $name) {
	// create a new record resolve its $id
	return [ 'id' => $id , 'name' => $name ];
} );

$gateful->delete ( '/api/:id', function ($req, $res, $id) {
	// deleting record with $id
	return [ 'id' => $id ];
} );

$gateful->put ( '/api/:id', function ($req, $res, $id, $name) {
	// updating $id record with a new $name
	return [ 'id' => $id ];
} );

