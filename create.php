<?php 
	include 'inc/header.php';
	include 'config.php';
	include 'Database.php'; 
?>

<?php 

$db    = new Database();
if (isset($_POST['submit'])) {
	$name  = mysqli_real_escape_string($db->link, $_POST['name']);
	$email = mysqli_real_escape_string($db->link, $_POST['email']);
	$skill = mysqli_real_escape_string($db->link, $_POST['skill']);
	if ($name =='' || $email == '' || $skill == '') {
		$error = "Field must not be Empty !!";
	}else {
		$insertquery = "INSERT INTO user(name,email,skill) VALUES ('$name','$email','$skill')";
		$create = $db->insert($insertquery);
	}

	
}

?>

<?php if (isset($error)) {
			echo "<span style = 'color:red;'>".$error."</span>";
	} ?>
	<form action="" method="POST">	
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Enter your name"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Enter your email"></td>
			</tr>

			<tr>
				<td>Skill</td>
				<td><input type="text" name="skill" placeholder="Enter your Skill"></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit"  value="Submit">
					<input type="reset" value="Clear">
					<a href="index.php"><button>Go Back</button></a>
				</td>
			</tr>
			
		</table>
	</form>	

	
	
		









		

<?php include 'inc/footer.php'; ?>