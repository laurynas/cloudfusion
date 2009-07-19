<?php
require_once('cloudfusion.class.php');

/**
 * Instantiate ANY Amazon class. In this example, we'll use AmazonSQS.
 */
$sqs = new AmazonSQS();


/**
 * Tell Tarzan to use a custom class for utilities. The custom class should 
 * override/extend the CFUtilities class.
 */
$sqs->set_utilities_class('CustomUtilities');


/**
 * Make sure you define your custom class.
 */
class CustomUtilities extends CFUtilities
{
	public function simplexml_to_array()
	{
		// Do stuff...
	}
}


/**
 * Begin using the class as normal, with any adjustments. For example:
 */
$list = $sqs->util->simplexml_to_array($sqs->list_queues());

?>