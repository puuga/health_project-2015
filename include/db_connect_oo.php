<?php // db_connect_oo.php ?>
<?php
  // Create connection

  $server = "localhost";
  $username = "health";
  $password = "12345678901";
  $dbname = "health";

  $conn = new mysqli($server, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    // echo "Failed to connect to MySQL: " . $conn->connect_error;
    $mysql->error = $conn->connect_error;
    echo json_encode($mysql);
    exit;
  } else {
    // echo "Success: connected to MySQL";
  }

  // $conn->close();

?>
