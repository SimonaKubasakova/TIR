<?php
	include '../../assets/hlavicka.php';
	include '../../assets/navbar.php';
 ?>
 <section class="container pt-4">

<?php

	$clanky = file('clanky.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	foreach ($clanky as $clanok) {
		list($nadpis,$obrazok,$text) = explode('::', $clanok);
		?>
	<h3><?php echo $nadpis ?></h3>
 	<img src="images/<?php echo $obrazok ?>" alt="">
 	<p><?php echo $text ?></p> <br>
 	<?php
	}
	?>


 </section>

 <?php 
 	include '../../assets/pata.php'
  ?>

