<?php


$link = mysqli_connect("localhost", "root", "", "db_personprofile");
$name_client = $_POST['name_client'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$subject_hire = $_POST['subject_hire'];
$message_hire = $_POST['message_hire'];
$DateHire = date("Y-m-d H:i:s");
 
// Check koneksi
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Query sql inser into
$sql = "INSERT INTO tb_form_hire SET name_client='$name_client', phone_number='$phone_number', email= '$email',subject_hire='$subject_hire',message_hire='$message_hire',date_hire='$DateHire'";
#if(mysqli_query($link, $sql)){
#    echo "Records inserted successfully.";
#} else{
#    echo "ERROR: Could not able to execute $sql. Wrong table" . mysqli_error($link);
#}
mysqli_query($link, $sql);
echo("Berhasil input data");
 
header("location:index.php"); 
#header("location:beranda.php");
?>
