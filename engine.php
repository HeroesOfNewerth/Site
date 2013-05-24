<?
include("config/config.php");
class engine {

	function mysql_connection() {
	 mysql_connect("localhost","root","");
	 mysql_select_db("hon");
	}
	
	function reload_page() {
	exit("<meta http-equiv='refresh' content='0; url= $_SERVER[PHP_SELF]'>");
	}
	
	function validate_login($username,$password) {
	$query = mysql_query("SELECT * FROM `user` WHERE `login`='$username' and `password`='$password'");
	if(mysql_num_rows($query) > 0) {
	$row = mysql_fetch_array($query);
	$_SESSION['user_id'] = $row['id'];
	$date = date("d.m.y");
	return true; }
	else {
	return false; }
	}
	
	function update_visit() {
	if(isset($_SESSION['user_id'])) {
	$date = date("d.m.y");
    $user_id = $_SESSION['user_id'];
	$query = mysql_query("UPDATE `user` SET `last_visit` = '$date' WHERE `id` = '$user_id'");
	if(!$query) { return false; }
    else { return true; }
	}
	else { return false;}
	}
	
	function check_login($login) {
	$query = mysql_query("SELECT * FROM `user` WHERE `login`='$login'");
	if(!$query) {
	return false;
	}
	if(mysql_num_rows($query)>0) {
	return false;
	}
	else { return true;}
	}
}
$core = new engine;


?>