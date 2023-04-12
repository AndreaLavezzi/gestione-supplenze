<?php
$page = $_GET['p'];
if($page != "0" && $page != "1" && $page != "2"){
    require_once("header.php");
}
switch ($page) {
    case "0":
        include_once("login.php");
        break;
    case "1":
        include_once("reset-password.php");
        break;
    case "2":
        include_once("change-password.php");
        break;
    case "3":
        include_once("absence-report-form.php");
        break;
    case "4":
        include_once("assenze.php");
        break;
    default:
        include_once("content-404.php");
        break;
}
if($page != "0" && $page != "1" && $page != "2"){
    require_once("footer.php");
}
?>
