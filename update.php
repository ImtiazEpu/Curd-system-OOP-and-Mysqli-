<?php 
	include 'inc/header.php';
	include 'config.php';
	include 'Database.php'; 
?>

<?php 

$id = $_GET['id'];
$db    = new Database();
$updatequery = "SELECT * FROM user WHERE id = $id ";
$getdata  = $db->select($updatequery)->fetch_assoc();





if (isset($_POST['submit'])) {
	$name  = mysqli_real_escape_string($db->link, $_POST['name']);
	$email = mysqli_real_escape_string($db->link, $_POST['email']);
	$skill = mysqli_real_escape_string($db->link, $_POST['skill']);
	if ($name =='' || $email == '' || $skill == '') {
		$error = "Field must not be Empty !!";
	}else {
		$updatequery = "UPDATE user SET name = '$name', email = '$email', skill = '$skill' WHERE id = $id";
		$update = $db->update($updatequery);
	}

	
}

?>

<?php if (isset($error)) {
			echo "<span style = 'color:red;'>".$error."</span>";
	} ?>
	<form action="update.php?id=<?php echo $id; ?>" method="POST">	
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $getdata['name']; ?>"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $getdata['email']; ?>"></td>
			</tr>

			<tr>
				<td>Skill</td>
				<td><input type="text" name="skill" value="<?php echo $getdata['skill']; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit"  value="Update">
					<input type="reset" value="Clear">
					<a class="button" href="index.php">Go Back</a>
				</td>
			</tr>
			
		</table>
	</form>	

	
	
		









		

<?php include 'inc/footer.php'; ?>