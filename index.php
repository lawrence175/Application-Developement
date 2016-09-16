<?php
/*
SoftwareDeveloper::lawrence k & tryphine A.

*/

?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<style>
</style>
<head>
<meta name="keywords" content="HumanDiseaseDiagnosticSystem,symptoms,diagnose me,what is wrong with me,diagnose me" />
<meta charset="utf-8" content="human diseases">
<title>HumanDiseaseDiagnosticSystem</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" media="only screen and (min-device-width:0px) and (max-device-width:359px)" href="style.css" />

<!-- animated display of subtitle  -->

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

<script language ="javascript">
function validateForm() {
  var x = document.forms["symptoms"]["#"].value;
  if (x == null || x == "");
  alert ("")
  return false;
}
</script>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
    <a href="readme.php">About</a>
    <a href="healthtip2.php">Health Tips</a>
    <a href="FirstAid.php">FirstAid</a>
  </div>
</div>

<!-- Click on the element below to open the fullscreen overlay navigation menu. -->
<!-- the navigation menu will slide in, from left to right: -->

<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>
<script>
function openNav() {
    document.getElementById("myNav").style.width = "35%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
<div id="header" align="right">Welcome <?php echo $_SESSION['username'];?> | <a href="logout.php" target="_parent">Logout</a></div>
<div class="form">

</head>
<body>

<form id="form" name="symptoms" action="retrieve.php" method="POST">
<fieldset><legend><h3>Enter your symptoms</h3></legend>
<ol>
<li>
    <label for="s1">Symptom 1</label><input name="s1" type="text" id="input1"  onkeyup="autoSuggest(this.id, 'listWrap1', 'searchList1', 'input1', event);" onkeydown="keyBoardNav(event, this.id);" />
  
</li>

<li>
<label for="s2">Symptom 2</label><input name="s2" type="text" id="input2"  onkeyup="autoSuggest(this.id, 'listWrap2', 'searchList2', 'input2', event);" onkeydown="keyBoardNav(event, this.id);" />
 
</li>

<li>
<label for="s3">Symptom 3</label><input name="s3" type="text" id="input3"  onkeyup="autoSuggest(this.id, 'listWrap3', 'searchList3', 'input3', event);" onkeydown="keyBoardNav(event, this.id);" />
 
</li>

<li>
    <label for="s4">Symptom 4</label><input name="s4" type="text" id="input4"  onkeyup="autoSuggest(this.id, 'listWrap4', 'searchList4', 'input4', event);" onkeydown="keyBoardNav(event, this.id);" />
 
</li>

<li>
<label for="s5">Symptom 5</label><input name="s5" type="text" id="input5"  onkeyup="autoSuggest(this.id, 'listWrap5', 'searchList5', 'input5', event);" onkeydown="keyBoardNav(event, this.id);" />
  
</li>

</ol>

<!--  -->


<!-- Submition of the form -->
<!-- <button type="submit" onclick="location.href='analyse.php'">Search</button> -->

</form>


<?php
// define variables and initialize with empty values
$Symptom1 = $Symptom2 = $Symptom3 = $Symptom4 = $Symptom5 = "";

//$favFruit = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["s1"])) {
        $Symptom1 = "Missing";
    }
    else {
        $Symptom1 = $_POST["s1"];
    }

    if (empty($_POST["s2"])) {
        $Symptom2 = "Missing";
    }
    else {
        $Symptom2 = $_POST["s2"];
    }

    if (empty($_POST["s3"]))  {
        $Symptom3 = "Missing";
    }
    else {
        $Symptom3 = $_POST["s3"];
    }

    if (!isset($_POST["s4"])) {
        $Symptom4 = "You must select 1 option";
    }
    else {
        $Symptom4 = $_POST["s4"];
    }

    if (empty($_POST["s5"])) {
        $Symptom5 = "You must select 1 or more";
    }
    else {
        $Symptom5= $_POST["s5"];
    }
}



?>
<input type="submit" name="submit" value="Submit">
<?php
if (isset($_GET["submit"])) {
    // process the form contents...
}
?>

</br></br></br></br>
</br></br></br>

</body>
</html>
