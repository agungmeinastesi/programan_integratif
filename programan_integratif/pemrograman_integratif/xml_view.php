<?php

$xml=simplexml_load_file("file1.xml");
Header('Content-type: text/xml');
print($xml->asXML());

?>
