<?php 
/* Local Database Connection */
try {
	$connection = new MongoClient();
	$db = $connection->selectDB('company_products');
	$users = $db->users;
	$products = $db->products;
	
	
} catch ( MongoConnectionException $e ) {
	die('Error connecting to MongoDB server');
	
} catch ( MongoException $e ) {
	die('Error: ' . $e->getMessage());
}

/* Live Database Connection 
$conn = new MongoClient('mongodb://admin:pass@ds013206.mlab.com:13206/mongoapp');
$db = $connection->selectDB('mongoapp');
*/

session_start();


require_once('constants.php');
require_once('functions.php');

/* Models */
require_once('user.php');
require_once('product.php');

if( is_user_logged_in() ){
	$current_user = current_user();
}