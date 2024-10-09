<?php
if ($_GET['run']) {
	$instruction = $_GET['run'];
}

	if ($instruction == 'editmovie') {
		?>
		<h6>Movie to edit: </h6>
		<form method="$_GET" action="../run.php">
		<input type="text" name="movien" placeholder="Name">
		<h6>Select the field to edit:</h6>
		
			<input type="radio" id="val" name="field" value="movie_name" required>
			<label for="Credit Card">Credit Card</label>
			<input type="radio" id="val" name="field" value="movie_year" required>
			<label for="Debit Card">Debit Card</label>
			<input type="radio" id="val" name="field" value="movie_genre" required>
			<label for="Credit Card">Credit Card</label>
			<input type="radio" id="val" name="field" value="movie_description" required>
			<label for="Debit Card">Debit Card</label>
			<input type="radio" id="val" name="field" value="Credit Card" required>
			<label for="Credit Card">Credit Card</label>
			<input type="radio" id="val" name="field" value="Debit Card" required>
			<label for="Debit Card">Debit Card</label>
			<input type="radio" id="val" name="field" value="Credit Card" required>
			<label for="Credit Card">Credit Card</label>
		
		<script>
			function myfunction() {
			var x = document.getElementById("val").required;}
		</script><br>
		<input type="submit" name="submit" name="search">
		</form>
		<?php
		
	}
?>