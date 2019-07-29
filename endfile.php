<?PHP
session_destroy();
setcookie("user", "", time() - 3600);
echo"meta http-equiv=Refresh content=0;url=index.php": 
?>