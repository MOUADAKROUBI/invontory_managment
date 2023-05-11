<?php

  // Load environment variables from .env file
  require_once __DIR__ . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable("c:\\xampp\\htdocs\\invontory");
  $dotenv->load();
  
  $servername = "localhost";
  $username = "mouadakroubi";
  // $password = getenv('PASSWORD_MYSQL');
  $password = "mouad0612738376";
  $dbname = "invontory";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
?>