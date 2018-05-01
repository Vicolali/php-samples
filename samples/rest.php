<?php
//you may need to sanitize first

//then set header to xml of json
header("Content-Type:application/json"); 
/* header("Content-Type:application/xml")*/

//include your functions file
include ("functions.php");

//process client's url for 'GET'
if(!empty($_GET['name']))
{
	$name = $_GET['name']; //capture the name of the item
	$price = get_price($name);//retrieve the price of the item
	
	//if price is empty, them item is missing.
	if(empty($price))
	{
		//respond with price IN JSON or XML by calling custom service
		reply_json(200,"item not found",NULL);
	}
	else
	{
		//respond with price IN JSON or XML by calling custom service
		reply_json(200,"item found",$price);
	}

}
else
{
	//empty url
	reply_json(400,"dude, give me a name",NULL);
}

?>