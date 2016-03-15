<?php
header('Content-Type: text/xml');//telling that xml file will be generated 

echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';//standard xml format

echo '<response>';//xml element, basically what the javascript see when user input 

$item = $_GET['item'];//'get' element from php file which will be used later on
$itemArray = array('shoes','hats','brackets','shuttles','tennis balls','shorts');//set a simple database using array
if(in_array($item,$itemArray))//if the input matches an item in array 
    echo 'We do have '.$item.'!';
elseif ($item=='')//if input is empty
    echo 'Please enter an item you wanna check!';
else//else
    echo 'Sorry we don\'t have "'.$item.'" !';

echo '</response>';
?>