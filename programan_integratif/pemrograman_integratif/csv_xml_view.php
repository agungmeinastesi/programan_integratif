<?php

$xml=simplexml_load_file("output.xml");
Header('Content-type: text/xml');
print($xml->asXML());

?>
