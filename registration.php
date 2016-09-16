<?php
/*
HumanDiseaseDiagnosticSystem
Software Developer:lawrence k & Tryphine A
This is a source code for [FRONT_END]registration html form embedded with php
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HumanDiseaseDiagnosticSystem</title>
<link rel="stylesheet" href="css/style.css" />

<!-- moving text to title bar of browser -->

<script language=javascript>
var rev = "fwd";
function titlebar(val){
    var msg  = "HumanDiseaseDiagnosticSystem";
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

<!-- registration form -->

<style>

</style>
</head>
<body>


<?php
	require('db.php');

    // If form submitted, insert values into the database.

    if (isset($_POST['username'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
        $telephone = $_POST['telephone'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
        $telephone = stripslashes($telephone);
        $telephone = mysql_real_escape_string($telephone);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username,password, email,trn_date,telephone) VALUES ('$username', '".md5($password)."', '$email','$trn_date','$telephone')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

 <!-- Registration description form -->

<h1 class="man"><center>Enter registration details below:</center></h1>
<div class="form">
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="telephone" name="telephone" placeholder="Telephone" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
<button type="submit" onclick="location.href='login.php'">Cancel</button>
</form>

<br /><br />
<br /><br /><br /><br /><br /<br />
<br /><br />
<br /><br />
<br /><br />
<br /><br >
<br /><br />
<p align="left">
    <footer id="footer">
                <div id="footer-inner">
                    <p>&copy; Developed by: <a href="#">Lawrence K  </a> &#124; <a href="#"> Tryphine A</a> &#124;</a></p>

                </div>
            </footer>
</p>
</div

<?php } ?>
</body>
</html>
