<html>
	<?php
		require_once("./head.php");
		require_once("./db.php");
		
		$db = new DB();
		$rawQuery = "SELECT * FROM product";
		$res = $db->mysqli->query($rawQuery);
	?>
	
	<body>
		<form action="./add-new.php">
		<table>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Add</th>
			</tr>
			<?php while($row = $res->fetch_assoc()): ?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><button type="submit" name="id" value="<?php echo $row['product_id']; ?>">+</button></td>
			</tr>
			<?php endwhile; ?>
		</table>
		</form>
	</body>
</html>
