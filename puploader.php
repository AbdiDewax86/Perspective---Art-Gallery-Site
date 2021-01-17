<?php
session_start();
// Create database connection
require_once "pindex.php";
// Initialize message variable
$msg = "";
$observer_id = $_SESSION['id'];
// If upload button is clicked ...
if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	$image_text = mysqli_real_escape_string($mysqli, $_POST['image_text']);
	// image file directory
	$target = "images/".basename($image);
	$sql = "INSERT INTO art (image, observer_id, image_text) VALUES ('$image', '$observer_id', '$image_text')";
	// execute query
	mysqli_query($mysqli, $sql);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
        header("location: puploadsuccess.php");
	}else{
		$msg = "Failed to upload image";
	}
}
$result = mysqli_query($mysqli, "SELECT * FROM art");
?>