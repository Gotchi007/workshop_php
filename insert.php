
<?php
include("connection/config.inc.php");


$fullname = $_POST['txt_fullname'];
$username = $_POST['txt_username'];
$password = $_POST['txt_password'];
$repassword = $_POST['txt_repassword'];

echo  $fullname."<br>";
echo  $username."<br>";
echo  $password."<br>";
echo  $repassword."<br>";


$sql = "INSERT INTO tbl_member (id, fullname, username, password, level)  VALUES ('', '$fullname', '$username', '$password', 'member')";

if (mysqli_query($conn, $sql)) {
  echo "เพิ่มข้อมูลำเร็จ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn -> close(); //close mysql
?>