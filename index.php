<?php 
	include 'inc/header.php';
	include 'config.php';
	include 'Database.php'; 
?>

<?php 

$db    = new Database();
$selectquery = "SELECT * FROM user";
$read  = $db->select($selectquery);
?>
	<?php if (isset($_GET['msg'])) {
			echo "<span style = 'color:green;'>".$_GET['msg']."</span>";
	} ?>	
	
	<table class="tblone">
		<tr>
			<th width="25%">Name</th>
			<th width="25%">Email</th>
			<th width="25%">Skill</th>
			<th width="25%">Action</th>
		</tr>
<?php 
	if ($read) {?> 
		<?php while ($row = $read->fetch_assoc() ) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['skill']; ?></td>
			<td><a href="Update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
		</tr>
	<?php } ?>
	<?php }else {?>
		<p>Data Not available</p>
	<?php } ?>
	</table>	
	<a href="create.php"><button>Create</button></a>	









		

<?php include 'inc/footer.php'; ?>