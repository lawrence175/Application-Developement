<?php
// developed by ::lawrence k && tryphine t
?>

<!DOCTYPE html>
<html>
<head>
<meta name="keywords" content="HumanDiseaseDiagnosticSystem,symptoms,diagnose me,what is wrong with me,diagnose me" />
<meta charset="utf-8" content="humandiseases">
<title>HumanDiseaseDiagnosticSystem</title>
<link rel="stylesheet" href="css/style.css" />

<!--moving text to title bar of browser-->

<script language=javascript>
var rev = "fwd";
function titlebar(val){
    var msg  = "HumanDiseaseDiagnosticSystem";  //animation
    var res = " ";
    var speed = 100;
    var pos = val;
    msg = "   |-"+msg+"-|";
    var le = msg.length;
    if(rev == "fwd"){
        if(pos < le){
            pos = pos+1;
            scroll = msg.substr(0,pos);
            document.title = scroll;
            timer = window.setTimeout("titlebar("+pos+")",speed);
        } else {
            rev = "bwd";
            timer = window.setTimeout("titlebar("+pos+")",speed);
        }
    } else {
        if(pos > 0) {
            pos = pos-1;
            var ale = le-pos;
            scrol = msg.substr(ale,le);
            document.title = scrol;
            timer = window.setTimeout("titlebar("+pos+")",speed);
        } else {
            rev = "fwd";
            timer = window.setTimeout("titlebar("+pos+")",speed);
        }
    }
}
titlebar(0);

</script>
<style>
	.footer{

		position: fixed;
		text-align: center;
		bottom: 100px;
		width: 100%;
		text-align: center;
		padding: 5px;
		clear: both;
		color: white;
	}

</style>
</head>
<body>

<?php
	require('db.php');
	session_start();

    // If form submitted, insert values into the database.

    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);

	//Checks.... is user existing in the database or not  && .md5[RSA technology] encrypts password to make it more secure.

        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: load2.php"); // Redirect user to index.php
            }else{
				echo "<center><div class='form'><h3>Username/password is incorrect.</h3>
                <br/>Click here </br> </br></br><a href='login.php'>Try Again</a><div></center>";
				}
    }else{
?>

<h1 class="man"><center>HumanDiseaseDiagnosticSystem</center></h1>
<div class="form">
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>

<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
<br /><br /><br /><br /><br /><br />

<p>Welcome to HumanDiseaseDiagnosticSystem, your consultation doctor, your own best friend. register and you can easily get your diagnosis results and health tips on various diseases.</p>
<p align="left">
	<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Developed by: <a href="#">Lawrence K  </a> &#124; <a href="#"> Tryphine A</a> &#124;</a></p>
					<div class="clr"></div>
				</div>
			</footer>
</div>
<?php } ?>

 </body>
</html>
