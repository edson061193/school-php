<?php
session_start();
if(isset($_SESSION['codigo'])){
    session_destroy();
}
session_destroy();
header("Location: index.php");