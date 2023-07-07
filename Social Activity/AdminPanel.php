<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<?php include_once 'dependencies.php';?>
<style>
    .btndesign{
        background-color: rgb(226, 41, 41);
	color: antiquewhite;
    border:none;
    border-radius:2px;
    width:100px;
    height:30px;
    font-weight:bold;
    }
</style>
<script type='text/javascript'>
function confirmDelete()
{
   return confirm("Are you sure you want to delete this?");
}
</script>


<body>
<?php
session_start();
require_once("config.php");
$name = $model = $year = $description = '';


if (!isset($_SESSION['login_sess'])) {
	header("Location: AdminLogin.php");
}
if (isset($_POST['add_car'])) {

	$make = $_POST['make'];
	$model = $_POST['model'];
	$rent = $_POST['rent'];
	$status=$_POST['status'];
	$image=$_POST['img'];
	$AddQuery = "INSERT INTO cars (make, model, rent, status,image)
    VALUES ('$make','$model', '$rent', '$status','$image')";
	mysqli_query($dbc, $AddQuery);
	header("Location: admin-panel.php");
}
;

$select_individual = "SELECT * FROM individual_posts";
$individual_posts = $dbc->query($select_individual);

$select_member = "SELECT * FROM registerations";
$member_result = $dbc->query($select_member);

$select_group="SELECT * FROM group_posts";
$group_posts=$dbc->query($select_group);

$select_joins="SELECT * FROM activity_registerations";
$joins=$dbc->query($select_joins);

if (isset($_POST['delete_member'])) {
	$hidden = $_POST['hidden'];
	$DeleteQuery = "DELETE FROM registerations WHERE
    id='$hidden'";
	mysqli_query($dbc, $DeleteQuery);
	header("Location: AdminPanel.php");
}

if (isset($_POST['delete_indpost'])) {
	$hidden = $_POST['hidden'];
	$DeleteQuery = "DELETE FROM individual_posts WHERE
    id='$hidden'";
	mysqli_query($dbc, $DeleteQuery);
	header("Location: AdminPanel.php");
}

if (isset($_POST['delete_grouppost'])) {
	$hidden = $_POST['hidden'];
	$DeleteQuery = "DELETE FROM group_posts WHERE
    id='$hidden'";
	mysqli_query($dbc, $DeleteQuery);
	header("Location: AdminPanel.php");
}

if (isset($_POST['delete_act'])) {
	$hidden = $_POST['hidden'];
	$DeleteQuery = "DELETE FROM activity_registerations WHERE
    id='$hidden'";
	mysqli_query($dbc, $DeleteQuery);
	header("Location: AdminPanel.php");
}
?>

<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo2">Admin Panel</label>
      <ul>
        <li><a href="Logout.php">Logout</a></li>
      </ul>
    </nav>
    <div class="container">
	<div class="row">
    
  <table class="col-lg-6"><caption><h3>Registered Members</h3><hr style="width:20%; border:1px solid #016334 ; border-radius:2px "></caption>
   <tr>
     <th>ID</th>
     <th>First Name</th>
     <th>Last Name</th>
	 <th>Email</th>
     <th>Phone</th>
     </tr>
<?php
 if ($select_member) {
	while ($row = $member_result->fetch_assoc()) {
		echo "<form action=AdminPanel.php method=post>";
		echo "<tr>";
		echo "<td name>" . $row['id'] . " </td>";
		echo "<td>" . $row['fname'] . " </td>";
		echo "<td>" . $row["lname"] . " </td>";
		echo "<td>" . $row["email"] . " </td>";
		echo "<td>" . $row["phone"] . " </td>";
		echo "<input type='hidden' name='hidden'  value=" . $row["id"] . " </td>";
	echo "<td>" . "<input type=submit class=btndesign name=delete_member value='Delete' onclick='return confirmDelete()' " . " </td>";;
		echo "</form>";
		echo "<form action=EditMember.php method=post>";
		echo "<input type='hidden' name='hidden'  value=" . $row['id'] . " </td>";
		echo "<td>"."<button type=submit name=eDetail class=btndesign>Edit Details</button>"."</td>";
		echo "</form>";
		echo "</tr>";	
	}}
?>
</table>
<div class="col-lg-6 text-center">
<a href="Register.php"><button class="btndesign">Add Member<button></a>
</div>
</div>
</div>

<div class="container">
<table class="col-lg-6"><caption><h3>Activity Registerations</h3><hr style="width:29%; border:1px solid #016334 ; border-radius:2px "></caption>
   <tr>
	 <th>First Name </th>
	 <th>Last Name </th>
	 <th> Email </th>
	 <th>Activity</th>
     <th>Type</th>
     </tr>
<?php
if ($select_joins) {
	while ($row = $joins->fetch_assoc()) {
        echo "<form role=form name=form2 method=post>";
        echo "<tr>";
		echo "<td>" . $row['fname'] . " </td>";
		echo "<td>" . $row["lname"] . " </td>";
		echo "<td>" . $row['email'] . " </td>";
		echo "<td>" . $row['activityTitle'] . " </td>";
		echo "<td>" . $row["activityType"] . " </td>";
	    echo "<input type='hidden' name='hidden'  value=" . $row["id"] . " </td>";
		echo "<td>" . "<input type=submit class=btndesign name=delete_act value='Delete' onclick='return confirmDelete()' " . " </td>";
		echo "</tr>";
        echo "</form>";
	}}
?>
</table>
</div>


<div class="container">

<table class="col-lg-6"><caption><h3>Individual Posts</h3><hr style="width:29%; border:1px solid #016334 ; border-radius:2px "></caption>
   <tr>
     <th>ID</th>
     <th>Title</th>
     </tr>
<?php
if ($select_individual) {
	while ($row = $individual_posts->fetch_assoc()) {
        echo "<form role=form name=form1 method=POST>";
		echo "<tr>";
		echo "<td>" . $row['id'] . " </td>";
		echo "<td>" . $row["title"] . " </td>";
	    echo "<input type='hidden' name='hidden'  value=" . $row["id"] . " </td>";
		echo "<td>" . "<input type=submit class=btndesign name=delete_indpost value='Delete' onclick='return confirmDelete()' " . " </td>";
		echo "</form>";
		echo "<form action=EditIndPost.php method=post>";
		echo "<input type='hidden' name='hidden'  value=" . $row['id'] . " </td>";
		echo "<td>"."<button type=submit name=eDetail class=btndesign>Edit Details</button>"."</td>";
		echo "</form>";
		echo "</tr>";	
	}}
?>
</table>
</div>

<div class="col-lg-6 text-center">
<a href="CreateIndPost.php"><button class="btndesign">Create Post<button></a>
</div>


<div class="container">
<table class="col-lg-6"><caption><h3>Group Posts</h3><hr style="width:29%; border:1px solid #016334 ; border-radius:2px "></caption>
   <tr>
     <th>ID</th>
     <th>Title</th>
     </tr>
<?php
if ($select_group) {
	while ($row = $group_posts->fetch_assoc()) {
        echo "<form role=form name=form2 method=post>";
        echo "<tr>";
		echo "<td>" . $row['id'] . " </td>";
		echo "<td>" . $row["title"] . " </td>";
	    echo "<input type='hidden' name='hidden'  value=" . $row["id"] . " </td>";
		echo "<td>" . "<input type=submit class=btndesign name=delete_grouppost value='Delete' onclick='return confirmDelete()' " . " </td>";
		echo "</form>";
		echo "<form action=EditGroupPost.php method=post>";
		echo "<input type='hidden' name='hidden'  value=" . $row['id'] . " </td>";
		echo "<td>"."<button type=submit name=eDetail class=btndesign>Edit Details</button>"."</td>";
		echo "</form>";
		echo "</tr>";	
	}}
?>
</table>
<div class="col-lg-6 text-center">
<a href="CreateGroupPost.php"><button class="btndesign">Create Post<button></a>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>