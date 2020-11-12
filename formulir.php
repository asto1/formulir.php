<?php
define ('url',"https://api.telegram.org/bot1481274208:AAF-xnhRgNYbalWE1FPJu8m1HWxHX0a8amw/");
$name = $_GET['nama'];
$email = $_GET['email'];
$phone = $_GET['no.hp']
$message = $_GET['alamat_lengkap'];
$chat_id = '-487745111';
$message = urlencode("Name:".$name."\n no.hp:".$phone."\n email :".$email."\n Alamat Lengkap:".$message);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
?>