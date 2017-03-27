<?php


$doc = new DOMDocument("1.0"); 
$node = $doc->createElement("temple");
$parnode = $doc->appendChild($node);
 


header("Content-type: text/xml"); 

// Iterate through the rows, adding XML nodes for each
while ($temp as $temple){
  // Add to XML document node
  $node = $doc->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name", {{$temple->Temp_name}});
  $newnode->setAttribute("address", {{$temple->Temp_address}});
  $newnode->setAttribute("lat", {{$temple->Temp_latitude}};
  $newnode->setAttribute("lng", {{$temple->Temp_longitude}});
  
}

echo $doc->saveXML();

?>