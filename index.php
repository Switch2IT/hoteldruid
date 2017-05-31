
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<!--<meta http-equiv="refresh" content="0; url=inizio.php">-->
<title> Hoteldruid </title>
</head>
<?php
session_start();

function userExistsInSql() {
	$dbServer = "localhost";
	$dbUser = "root";
	$dbPassword = "";
	$db = "hoteldruid";
	$con = mysqli_connect($dbServer, $dbUser, $dbPassword, $db);
	if(mysqli_connect_errno())
	{
		echo 'MySql connection error';
		mysqli_close($con);
		return false;
	}
	$query = "select count(*) as 'total' from utenti where nome_utente = '".$_POST['userLogin']."';";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_assoc($result);
	echo "Row total: ".$row['total'];
	if($row['total'] > 0) {
		echo "Total should be 0: ".$row['total'];
		return true;
	} else if($row['total'] == 0) {
		echo "Total should be > 0: ".$row['total'];
		insertUserInSql($_POST['userLogin']);
		return false;
	}

	mysqli_close($con);
}

function insertUserInSql($userName) {
	$now = date('Y-m-d');
	echo $now;
	$dbServer = "localhost";
	$dbUser = "root";
	$dbPassword = "";
	$db = "hoteldruid";
	$con = mysqli_connect($dbServer, $dbUser, $dbPassword, $db);
	if(mysqli_connect_errno())
	{
		echo 'MySql connection error';
		mysqli_close($con);
		return false;
	}
	$query = "select max(idutenti) from utenti";
	$result = mysqli_query($con, $query);
	$highestUtenti = mysqli_fetch_row($result);
	echo $highestUtenti[0];
	$highestUtenti[0] += 1;
	echo $highestUtenti[0];

	$query = "insert into utenti(idutenti,nome_utente,datainserimento,hostinserimento,tipo_pass) values (".$highestUtenti[0].",'".$_POST['userLogin']."','".$now."','".$dbServer."','n');";
	mysqli_query($con, $query); 

	mysqli_close($con);
}

function authenticate($user, $password) {
	if(empty($user) || empty($password)) return false;
	$access = 0;
	$ldap_host = "10.3.50.36";
	$ldap_dn = "OU=Hotel,DC=pink,DC=be";
	$ldap_usr_dom = '@pink.be';
	$ldap_user_group = "DruidUsers";
	$ldap = ldap_connect($ldap_host);
	if($bind = @ldap_bind($ldap, $user.$ldap_usr_dom, $password)) {
		$filter = "(sAMAccountName=".$user.")";
		$attr = array("memberof");
		$result = ldap_search($ldap, $ldap_dn, $filter, $attr) or exit("Unable to search LDAP server");
		$entries = ldap_get_entries($ldap, $result);
		ldap_unbind($ldap);
		// check groups
		if(isset($entries[0]['memberof']))
		{
			foreach($entries[0]['memberof'] as $grps) {
				// is user
				if(strpos($grps, $ldap_user_group)) $access = 1;
			}
		}
		if($access != 0) {
			// establish session variables
			$_SESSION['user'] = $user;
			$_SESSION['access'] = $access;
			return true;
		} else {
			// user has no rights
			return false;
		}
	} else {
		return false;
	}
}
if(isset($_GET['out'])) {
	session_unset();
	$_SESSION = array();
	unset($_SESSION['user'],$_SESSION['access']);
	session_destroy();
}
if(isset($_POST['userLogin'])){
	echo "User authenticate";
	if(authenticate($_POST['userLogin'],$_POST['userPassword']))
	{
		userExistsInSql($_POST['userLogin']);
		$_SESSION['loggedin'] = true;
		header("Location: inizio.php");
		die();
	} else {
		if(isset($_SESSION['loggedin']))
			unset($_SESSION['loggedin']);
		$error = 1;
	}
}
if(isset($error)) echo "<script type='text/javascript'>alert('Login failed: Incorrect user name, password, or rights')</script>";
if(isset($_GET['out'])) echo "Logout successful";
?>
<body style="background-color: #ffffff;">
    <div>
        <br><br>
        <h1>Login</h1>
        <br>
        <form action="index.php" method="post">
	        User: <input type="text" name="userLogin" /><br />
	        Password: <input type="password" name="userPassword" />
	        <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
</body>
</html>
