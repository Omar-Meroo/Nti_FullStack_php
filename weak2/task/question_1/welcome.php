<?php
session_start();
if(isset($_SESSION['age']) ){
    echo "welcome You accepted because Your Age is :" .$_SESSION['age'];
}

?>