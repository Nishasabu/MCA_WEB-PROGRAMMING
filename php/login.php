<html>
<head>
<title>Login</title>
</head>
<body>
<?php
// Check if username and password are correct
if ($_POST["user"] == "php" && $_POST["pass"] == "php") {

 session_start();
 $_SESSION["Login"] = "YES";
 echo "<h1>You are now logged correctly in</h1>";

}
else {
// If not correct, we set the session to NO
 session_start();
 $_SESSION["Login"] = "NO";
 echo "<h1>You are NOT logged correctly in </h1>";
 echo "<p><a href='document.php'>Link to protected file</a></p>";
}
?>
</body>
</html>