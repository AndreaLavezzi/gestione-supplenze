<?php
$page = $_GET['page'];
switch ($page) {
    case "report-absence":
        include_once("absence-report-form.php");
        break;
    case "confirm-absence":
        include_once("absence-report-confirmation.php");
        break;
    default:
        break;
}
?>
