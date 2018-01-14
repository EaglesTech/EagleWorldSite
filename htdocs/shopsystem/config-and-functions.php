<?PHP
// ###################### CONFIG ########################
//load page config file
$config['site'] = parse_ini_file('config/config.ini');
//load server config
$config['server'] = parse_ini_file($config['site']['server_path'].'config.lua');
if(isset($config['server']['mysqlHost']))
{
	//new (0.2.6+) ots config.lua file
	$mysqlhost = $config['server']['mysqlHost'];
	$mysqluser = $config['server']['mysqlUser'];
	$mysqlpass = $config['server']['mysqlPass'];
	$mysqldatabase = $config['server']['mysqlDatabase'];
}
elseif(isset($config['server']['sqlHost']))
{
	//old (0.2.4) ots config.lua file
	$mysqlhost = $config['server']['sqlHost'];
	$mysqluser = $config['server']['sqlUser'];
	$mysqlpass = $config['server']['sqlPass'];
	$mysqldatabase = $config['server']['sqlDatabase'];
}
$sqlitefile = $config['server']['sqliteDatabase'];
$passwordency = '';
if(strtolower($config['server']['useMD5Passwords']) == 'yes' || strtolower($config['server']['passwordType']) == 'md5')
{
	$passwordency = 'md5';
}
if(strtolower($config['server']['passwordType']) == 'sha1')
{
	$passwordency = 'sha1';
}
// loads #####POT mainfile#####
include('pot/OTS.php');
// PDO and POT connects to database
$ots = POT::getInstance();
if(strtolower($config['server']['sqlType']) == "mysql")
{
	//connect to MySQL database
	try
	{
		$ots->connect(POT::DB_MYSQL, array('host' => $mysqlhost, 'user' => $mysqluser, 'password' => $mysqlpass, 'database' => $mysqldatabase) );
	}
	catch(PDOException $error)
	{
	    echo 'Database error - can\'t connect to MySQL database. Possible reasons:<br>1. MySQL server is not running on host.<br>2. MySQL user, password, database or host isn\'t configured in: <b>'.$config['site']['server_path'].'config.lua</b> .<br>3. MySQL user, password, database or host is wrong.';
		exit;
	}
}
elseif(strtolower($config['server']['sqlType']) == "sqlite")
{
	//connect to SQLite database
	$link_to_sqlitedatabase = $config['site']['server_path'].$sqlitefile;
	try
	{
		$ots->connect(POT::DB_SQLITE, array('database' => $link_to_sqlitedatabase));
	}
	catch(PDOException $error)
	{
	    echo 'Database error - can\'t open SQLite database. Possible reasons:<br><b>'.$link_to_sqlitedatabase.'</b> - file isn\'t valid SQLite database.<br><b>'.$link_to_sqlitedatabase.'</b> - doesn\'t exist.';
		exit;
	}
}
else
{
	echo 'Database error. Unknown database type in <b>'.$config['site']['server_path'].'config.lua</b> . Must be equal to: "<b>mysql</b>" or "<b>sqlite</b>". Now is: "<b>'.strtolower($config['server']['sqlType']).'"</b>';
	exit;
}
$SQL = POT::getInstance()->getDBHandle();

//###################### FUNCTIONS ######################
//return password "to db"
function password_ency($password)
{
	$ency = $GLOBALS['passwordency'];
	if($ency == 'sha1')
	{
		return sha1($password);
	}
	elseif($ency == 'md5')
	{
		return md5($password);
	}
	else
	{
		return $password;
	}
}

//is it valid nick?
function check_name($name)//sprawdza name
{
  $temp = strspn("$name", "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM- [ ] ");
  if ($temp != strlen($name))
  {
	return false;
  }
  else
  {
	$ok = "/[a-zA-Z ]{1,25}/";
	return (preg_match($ok, $name))? true: false;
  }
}
//is it valid password?
function check_password($pass)//sprawdza haslo
{
  $temp = strspn("$pass", "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890");
  if ($temp != strlen($pass))
  {
	return false;
  }
  else
  {
	  $ok = "/[a-zA-Z0-9]{1,40}/";
	  return (preg_match($ok, $pass))? true: false;
  }
}
?>