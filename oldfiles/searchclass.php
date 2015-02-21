<?php 

require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('w65VqVKa8iGpK7hcHqJOkUkqaUuTvKi0yh3J6xGe', 'a7g8cy2WLjmbAuIj3KiaohHCSr1MvOYKA47tJvBM', 'NCURm6asi3YTOaukNJy3ySseoWiQvsOq44721V7D');

use Parse\ParseObject;
 
$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "bar");
$testObject->save();

echo "all done!";

?>