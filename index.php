<?php
require 'flight/Flight.php';




Flight::route('/', function(){
    echo 'world api!';
});

Flight::route('/server/@host', function($host){
  echo 'server: ' . $host;
});

Flight::map('notFound', function(){
  // Handle not found
  echo '404 error not found.';
});



Flight::start();

?>