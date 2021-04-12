<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$company=$_POST['company'];
$email=$_POST['email'];
$area_code=$_POST['area_code'];
$phone=$_POST['phone'];
$city=$_POST['city'];

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
    // $host = "localhost";
    // $dbUsername = "root";
    // $dbPassword = "qawedrtgy1357";
    // $dbname = "customerregistration";
    $conn = new mysqli('localhost', 'root', 'qawedrtgy1357', 'customerregistration');
    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       }
       else {
        $SELECT = "SELECT email From customerinfo Where email = ? Limit 1";
        $INSERT = "INSERT Into customerinfo (first_name,last_name, company, email, area_code, phone, city) values(?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssis", $first_name, $last_name, $company, $email, $area_code, $phone, $city);
        $stmt->execute();
        echo "New record inserted sucessfully";
       } else {
        echo "Someone already register using this email";
       }
       $stmt->close();
       $conn->close();
      }
}
else {
    echo "All field are required";
    die();
   }
?>