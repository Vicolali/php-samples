<?php 
 
 // get the price of a book
 function get_price($item)
 {
	 $myStock = array("soa"=>1000, "c-sharp"=>700, "php"=>500);
	 foreach ($myStock as $x=>$y)
	 {
		 if ($x==$item)
		 {
			 return $y;
			 break;
		 }
	 }
 }
 
 //reply with json
 function reply_json($status, $status_message, $data)
 {
	 //status and status message are part of rest
	header("HTTP/1.1 $status $status_message");
	
	$response['status'] = $status;
	$response['status_message'] = $status_message;
	$response['data'] = $data;
	
	//encode the response in json format using json_encode
	$json_response = json_encode($response);
	echo $json_response;
	 
 }

?>