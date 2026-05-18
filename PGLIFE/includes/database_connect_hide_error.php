<?php
  $db_hostname = "127.0.0.1";
  $db_username = "root";
  $db_password = "root4080";
  $db_name = "pg_life";

  // This function will not echo/show any error on the webpage even if the function fails or there is some error...
  // Using it so the result of this page will only be the JSON encoded string to be parsed by the AJAX requests...
  $con = @mysqli_connect( $db_hostname , $db_username , $db_password , $db_name );
?>



<!-- <?php
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

<?php
$conn = mysqli_connect(
    "sql200.infinityfree.com",
    "if0_41948004",
    "anurag20044080",
    "if0_41948004_pg_life"
);
?> -->