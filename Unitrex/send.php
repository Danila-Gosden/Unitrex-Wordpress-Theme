<?php

//if(is_uploaded_file($_FILES['cv']['tmp_name'])){
//    echo 'Пашет';
//}
//else{
//    echo 'Не пашет';
//}
//readfile($_FILES['userfile']['tmp_name']);



$filename = $_FILES['file']['name'];
move_uploaded_file($filename, get_template_directory_uri() . "/downloads");
$file_download = "<a href=". get_template_directory_uri() . "/downloads/" . $_FILES['name'] . "> link for </a>";
$to = "danilagosden@gmail.com";
$subject = $_POST["first_name"] . " " . $_POST["last_name"];
$message = $_POST["cover_latter"] . "\n" . "Phone Number: " . $_POST["phone_number"] . "\n" . "Email: " . $_POST["email"] . "\n" . "Skype: " . $_POST["skype"] . "\n" . "Linkedin: " . $_POST["linkedin"] . "\n" . $file_download ;
$headers = "MIME-Version: 1.0" . "\r\n" .
    "Content-Transfer-Encoding: base64" . "\r\n" .
    "Content-Type: multipart/mixed; charset=utf-8";
mail($to, $subject, $message, $headers);

echo "<script>self.location='https://leasoft-kh.org/';</script>";