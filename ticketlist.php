
<?Php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>List of Tickets</title>
	<style type="text/css">
		body{}
	</style>
</head>
<body   >
	<?php include 'navadmin.php';
	include 'include/usernamedisplay.php';?>
<h4 align="center" style="margin-top: px; color:Orange; background-color:white " > Details of Issued Tickets</h4>
<hr>
  <div class="l-wishlist l-pd-top-4">
        <div class="l-container">

<?php
include 'ticketadminpart.php';?>
<?php include'include/footer.php' ?>
</body>
</html>