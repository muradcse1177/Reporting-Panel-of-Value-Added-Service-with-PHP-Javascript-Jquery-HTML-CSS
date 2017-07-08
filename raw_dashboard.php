<?php
$conn = new mysqli("localhost", "root", "", "hvas");
$sql="Select count(status) as status ,DATE(time) as date  from gpsubscribe where status='Unsubscribed' and date(time) ='2017-05-30'";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$status=$row['status'];
		$date=$row['date'];
	}
}
$conn = new mysqli("localhost", "root", "", "report");
$sql="Select date  from gpsub";
$result = mysqli_query($conn,$sql);
if ($result->num_rows < 0) {
	$sql="Insert into gpsub (date,deactivation) values ('$date','$status')";
	$conn->query($sql);
}
$conn = new mysqli("localhost", "root", "", "hvas");
$sql="Select count(status) as status_sub ,DATE(time) as date  from promo_a where status='subscribed' and date(time) ='2017-05-30'";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$status_sub=$row['status_sub'];
		$date=$row['date'];
	}
}

$sql="Select count(status) as status_suc ,DATE(time) as date  from promo_a where status='success' and date(time) ='2017-05-30'";
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$status_suc=$row['status_suc'];
		$date=$row['date'];
	}
}

$conn = new mysqli("localhost", "root", "", "report");
$sql="Update gpsub set subscribed='$status_sub',campaign='$status_suc' where date='$date'";
$conn->query($sql);
?>