<?php
	if (isset($_POST['submit'])) {
		$Username =$_POST['user'];
		$Password =$_POST['pass'];

		$Login =array('user' => 'Ekoputro',
					  'pass' => 'ekoputro56');
		

		if ($Username == $Login['user'] && $Password == $Login ['pass']) {
			echo "<h1> LOGIN SUKSES </h1>";
?>

<form method="POST">
	<h2> Pilih Genre Film Favorit </h2>
	<table>
		<tr>
			<td> <input type="checkbox" name="film[]" value="Horror"> Horror</td>
			<td> <input type="checkbox" name="film[]" value="Action"> Action</td>
		</tr>
		<tr>
			<td> <input type="checkbox" name="film[]" value="Animasi"> Animasi</td>
			<td> <input type="checkbox" name="film[]" value="Thriller"> Thriller</td>
			<td> <input type="checkbox" name="film[]" value="Anime"> Anime</td>
		</tr>
	</table>
		******************************
	<h2> Pilih Tujuan Wisata Travelling Favorit </h2>
	<table>
		<tr>
			<td> <input type="checkbox" name="travel[]" value="Bali"> Bali</td>
			<td> <input type="checkbox" name="travel[]" value="Raja Ampat"> Raja Ampat</td>
		</tr>
		<tr>
			<td> <input type="checkbox" name="travel[]" value="Pulau"> Pulau</td>
			<td> <input type="checkbox" name="travel[]" value="Bangka"> Bangka</td>
			<td> <input type="checkbox" name="travel[]" value="Labuan"> Labuan</td>
		</tr>
	</table>
		******************************
	<br><br><input type="submit" name="submit2" value="Input">
</form>

<?php
	}	
	else{
		echo "<h1>Username / Password salah</h1>";
	}
}
	
if (isset($_POST['submit2'])) {
			$dataFilm	=$_POST['film'];
			$dataTravel =$_POST['travel'];

			echo "<h1> Terima Kasih Telah Menginputkan Daftar Favorit </h1>";
			echo "<b> Film Favorit Anda </b> <br>";
			foreach($dataFilm as $film) {
				echo $film."<br>";
			}

			echo "<br><b> Tujuan Travel Favorit Anda </b> <br>";
			foreach($dataTravel as $travel) {
				echo $travel."<br>";
		
			}

	}

?>
