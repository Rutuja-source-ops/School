<?php
include 'conn.php';
$stateid = $_POST['stateid'];
if($stateid!='')
{
$district_result = $conn->query('select * from tbl_district where state_id='.$stateid.'');
$options = "<option value=''>---Select District---</option>";
while($row = $district_result->fetch_assoc()) {
$options .= "<option value='".$row['id']."'>".$row['name']."</option>";
}
echo $options;
}?>