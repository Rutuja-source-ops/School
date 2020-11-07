<?php
if(isset($_GET['delid']))
{
require_once  '../../controller/StaffController.php';
$StaffController = new StaffController();
 $id = $_GET['delid'];
$response = $StaffController->Delete($id);
$responseData = json_decode($response, true);
?>
<script>
alert("DELETE Successfully")
 window.location="staff/list.php";
 </script>
 <?php
  } else {
    //echo $responseData["message"];
  }
  ?>