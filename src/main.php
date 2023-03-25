<?php
$page = $_GET['p'];
switch ($page) {
    case "1":
        include_once("absence-report-form.php");
        break;
    case "2":
        include_once("absence-report-confirmation.php");
        break;
    default:
        include_once("content-404.php");
        break;
}
?>
