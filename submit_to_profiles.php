<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
  //$result = r\db("web")->table('profiles')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

  $username = $_POST['username']; 
  $password_hash = $_POST['password_hash']; 
  $email = $_POST['email'];  
  $friendly_name = $_POST['friendly_name'];
  $priviledge = $_POST['priviledge'];
//  $idea_cat = $_POST['idea_cat'];
//  $ideaID = $_['id'];
 
 $document = Array( 'Priviledge' => $priviledge,
                    'FriendlyName' => $friendly_name,
                    'Email' => $email,
		    'PasswordHash' => $password_hash,
		    'UserName' => $username);  

  $result = r\db("web")->table('profiles')->insert($document)->run($conn);
  echo "Thank you for creating a profile!";
?>
