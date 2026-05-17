<!-- <?php
  $db_hostname = "127.0.0.1";
  $db_username = "root";
  $db_password = "root4080";
  $db_name = "pg_life";

  $con = mysqli_connect( $db_hostname , $db_username , $db_password , $db_name );
?> -->


<?php
$conn = mysqli_connect(
    "127.0.0.1",
    "root",
    "root4080",
    "pg_life"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
