<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `searchdb` WHERE `number` LIKE '%$keyword%' ORDER BY `number`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="get_search.php?id=<?php echo $fetch['id']?>"><h4><?php echo $fetch['number']?></h4></a>
		<h3><?php echo $fetch['name']?></h3></a>
		<h3><?php echo $fetch['cnic']?></h3></a>
		<h3><?php echo $fetch['address']?></h3></a>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>