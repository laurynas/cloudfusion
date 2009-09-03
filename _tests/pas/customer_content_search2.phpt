--TEST--
AmazonPAS::customer_content_search by email

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Look up the user
	$pas = new AmazonPAS();
	$response = $pas->customer_content_search('ryan@getcloudfusion.com');

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)
