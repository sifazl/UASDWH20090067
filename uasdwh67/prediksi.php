<?php include "_header.php"; ?>

	<div>
		<form action="tampil.php" method="post">
			Prediksi Customer Untuk 
			<select name="tahun" required>
				<?php
				for ($i = 1; $i <= 10; $i++) {
					echo "<option value='$i'>$i</option>";
				}
				?>
			</select> 
			Tahun berikutnya <input type="submit" name="prediksi" value="Prediksi">
		</form>
	</div>

<?php 
echo "</section>";
include "_footer.php"; ?>