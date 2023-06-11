<?php
sleep(0.1);

include 'config.php';
if (isset($_POST['request'])) {

	$request = $_POST['request'];

	if ($_POST['request'] == '' || null) {
		$query = "SELECT * FROM products WHERE status = 1";
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
	} else {
		$query = "SELECT * FROM products WHERE status = 1 AND class = '$request'";
		$result = mysqli_query($conn, $query);
		$count = mysqli_num_rows($result);
	}


?>

	<div class="grid grid-cols-5 gap-5">
		<?php
		while ($row = mysqli_fetch_assoc($result)) {

		?>
			<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white px-4 py-3 items-start justify-left h-max rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
				<a class="w-full" href="product-details.php?product-details=<?= $row['id']; ?>">
				<div class="w-full flex flex-col justify-center items-center m-auto">
							<img src="<?= $row['image'] ?>" class="h-[200px] w-[200px] m-auto">
						</div>
						<p class="text-[1.1em] font-bold"> <?= $row['name'] ?></p>
						<div class=" text-white rounded-[5px] px-[5px] w-max">
							<?php
								$query = "SELECT * FROM products_units WHERE product_id =?";
								$stmt = $conn->prepare($query);
								$stmt->bind_param("i", $row['id']);
								$stmt->execute();
								$result2 = $stmt->get_result();
								$row2 = $result2->fetch_assoc();
							?>
								<p class="mt-2">Price Start at:</p>
								<p class="text-[0.9em] border-2 rounded-md px-4  label my-1"><span><strong>PHP </strong> <?= $row2['unit_price'] ?> <span class="color: #c6c6c6; font-size: 11px">/<?php echo $row2['unit']; ?></span></span></p>
						</div>	
				</a>
			</div>
		<?php
		};
		?>
	</div>

<?php
}
?>