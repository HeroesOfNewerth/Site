<?
include ("engine.php");
$core->mysql_connection();

if($_REQUEST['submit']) {
$username = $_REQUEST['nickname'];
$password = md5($_REQUEST['password']);
if($core->validate_login($username,$password) == true) {
$core->update_visit();
$core->reload_page();
}
else { echo "Error"; }

}

if($_REQUEST['LOGOUT']) {
$core->update_visit();
unset($_SESSION['user_id']);
$core->reload_page();

}

if($_REQUEST['Register']) {
$nickname = $_REQUEST['nickname'];
$firstname = $_REQUEST['first_name'];
$secondname = $_REQUEST['last_name'];
$password = md5($_REQUEST['password']);
$money = 0;
$avatar = "images/create_icon.jpg";
$clan = "Нету";
$email = $_REQUEST['email'];
$referal = $_REQUEST['referrer_nick'];

$query = mysql_query("SELECT * FROM `user` WHERE `login`='$nickname'");
if(mysql_num_rows($query) > 0) {
$_SESSION['registered'] == 3;
$core->reload_page();
}
else {
$query = mysql_query("INSERT INTO `user` (`login`,`password`,`email`,`firstname`,`secondname`,`invited`,`actived`,`money`,`clan`,`avatar`) VALUES ('$nickname','$password','$email','$firstname','$secondname','$referal',1,'$money','$clan','$avatar')");
if(!$query) {
$core->reload_page();
}
else {
$_SESSION['registered'] = 1;
$core->reload_page();
}
}
}
?>