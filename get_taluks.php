<?php
include 'conn.php';
$districtid = $_POST['districtid'];
if($districtid!='')
{
$taluka_result = $conn->query('select * from tbl_taluq where district_id='.$districtid.'');
$options = "<option value=''>---Select Taluka---</option>";
while($row = $taluka_result->fetch_assoc()) {
$options .= "<option value='".$row['id']."'>".$row['name']."</option>";
}
echo $options;
}?>