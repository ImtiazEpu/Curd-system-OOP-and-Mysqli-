<?php 
	include 'inc/header.php';
	include 'config.php';
	include 'Database.php'; 
?>

<?php 

	$db    = new Database();
	$selectquery = "SELECT * FROM user";
	$read  = $db->select($selectquery);

	 if (isset($_GET['msg'])) {
				echo "<span style = 'color:green;'>".$_GET['msg']."</span>";
		} 
?>


	
	
	<table class="tblone">
		<tr>
			<th width="10%">Serial</th>
			<th width="30%">Name</th>
			<th width="25%">Email</th>
			<th width="20%">Skill</th>
			<th width="15%">Action</th>
		</tr>
<?php 
	if ($read) {?> 
		<?php 
			$i = 1;
			while ($row = $read->fetch_assoc() ) { ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['skill']; ?></td>
				<td>
					<a class="button" href="update.php?id=<?php echo urldecode($row['id']); ?>">Edit</a>
				</td>
			</tr>
			<?php } ?>
	<?php }else {?>
				<p>Data Not available</p>
			<?php } ?>
	</table>	
	<a class="button" href="create.php">Create</a>	









		

<?php include 'inc/footer.php'; ?>