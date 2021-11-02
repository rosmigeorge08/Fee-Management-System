<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "fees");
$sql = "SELECT * FROM extc WHERE name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		?>
		<tr style="border-bottom: 2px solid #99D98C;">
			<td class="px-5"><?php echo $row['id']?></td>		
			<td class="px-5"><?php echo $row['name']?></td>
			<td class="px-5"><?php echo $row['balance']?></td>
			<td><a href="payextc.php?id= <?php echo $row['id'] ;?>"> <button type="button" class="btn5 px-3 btn-sm">Fee Details</button></a></td> 
	  	</tr>	
	<?php
	}
	?>
<?php
}
?>