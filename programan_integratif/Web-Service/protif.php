<?php 
	$doc = new DOMDocument(); 
	$filename = 'MyData.xml';
	$doc->load( $filename );
	echo $doc->saveXML();
	$web_rate_elements = $doc->getElementsByTagName( "web_rate_element" );
if(!$web_rate_elements){exit;}

$link = mysql_connect('localhost', 'rindy', 'rindy');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$db_selected = mysql_select_db('MyData', $link);
if (!$db_selected) {
    die ('Can\'t use MyData : ' . mysql_error());
}

foreach( $web_rate_elements as $web_rate_element )
	{ 
		$destinations = $web_rate_element->getElementsByTagName( "destination" );
		$access_numbers = $web_rate_element->getElementsByTagName( "access_number" );
		$rates = $web_rate_element->getElementsByTagName( "rate" );
		$sms_rates = $web_rate_element->getElementsByTagName( "sms_rate" );
		$bt_rates = $web_rate_element->getElementsByTagName( "bt_rate" );

		
		$destination = trim($destinations->item(0)->nodeValue);
		$access_number = $access_numbers->item(0)->nodeValue;
		$rate = $rates->item(0)->nodeValue;
		$sms_rate = $sms_rates->item(0)->nodeValue;
		$bt_rate = $bt_rates->item(0)->nodeValue;

$sql = "INSERT INTO databse_name (destination, access_number, rate, sms_rate, bt_rate, mobile) VALUES ('$destination' ,'$access_number' ,'$rate' , '$sms_rate' ,'$bt_rate', '$mobile')";
		
		@mysql_query($sql);

}
mysql_close($link); 
?>