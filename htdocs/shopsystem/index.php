<?PHP
//start :)
session_start();
//##### CONFIG #####
include('config-and-functions.php');
$subtopic = $_REQUEST['subtopic'];
$action = $_REQUEST['action'];
//##### LOGOUT #####
if($action == "logout") {
unset($_SESSION['account']);
unset($_SESSION['password']);
}
//##### LOGIN #####
//check is player logged
$logged = FALSE;
if(isset($_SESSION['account'])) {
	$account_logged = $ots->createObject('Account');
	$account_logged->load($_SESSION['account']);
	if($account_logged->isLoaded() && $account_logged->getPassword() == $_SESSION['password']) {
		$logged = TRUE;
	}
	else
	{
		$logged = FALSE;
		unset($_SESSION['account']);
		unset($account_logged);
	}
}
//login with data from form
$login_account = trim($_POST['account_login']);
$login_password = trim($_POST['password_login']);
if(!$logged && !empty($login_account) && !empty($login_password)) {
	if(!is_numeric($login_account)) {
		$show_msgs[] = "Login account is not numeric.";
	}
	if(!check_password($login_password)) {
		$show_msgs[] = "Login password contains illegal chars or lenght.";
	}
	$login_password = password_ency($login_password);
	if(empty($show_errors)) {
		$account_logged = $ots->createObject('Account');
		$account_logged->load($login_account);
		if($account_logged->isLoaded()) {
			if($login_password == $account_logged->getPassword()) {
				$_SESSION['account'] = $login_account;
				$_SESSION['password'] = $login_password;
				$logged = TRUE;
			}
			else
			{
				$logged = FALSE;
			}
		}
	}
}
include("shopsystem.php");
//load layout
include('layouts/'.$config['site']['shop_layout_name'].'/layout.php');
?>