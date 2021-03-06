<?php
	require 'function.php';
	require 'lib/nusoap.php';
	$server=new nusoap_server();
	$server->configureWSDL("book","urn:book");
	$server->register(
			"price",
			array("name"=>'xsd:string'),
			array("return"=>"xsd:intger")
			);
	$server->register(
			"find",
			array("book"=>'xsd:string'),
			array("return"=>'xsd:string')
			);
	$server->register(
			"find_xml",
			array("book_xml"=>'xsd:string'),
			array("return"=>"xsd:intger")
			);
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : ''; 
	$server->service($HTTP_RAW_POST_DATA); 
?>