<?php
	date_default_timezone_set("Europe/Bratislava");
	include '../../assets/hlavicka.php';
	include '../../assets/navbar.php';
 ?>
 <section class="container pt-4">
 	<h2 class="text-center pt-2">Správy</h2>
 	<h4><?php echo date('j.n.Y H:i:s') ?></h4>
 	<?php
 		$clankyNazovSuboru = glob('*.txt');
 		foreach ($clankyNazovSuboru as $subor) {
 			$datum = strtotime(basename($subor,".txt"));
 			$datumStr = date('j.n.Y H:i', $datum);
 			$clanok = file($subor, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 				?>
 				<div>
 					<br><h5><?php echo $clanok[0]?></h5>
 					<small>Publikované: <?php echo date('j.n.Y H:i', $datum) ?></small> <br><br>
 					<img src="images/<?php echo $clanok[1] ?>" alt="" width=150><br><br>
 					 	<?php
 							for ($i=2; $i < count($clanok); $i++) { 
 								echo '<p>' . $clanok[$i] . '</p>';
 							}
 						?>
 						<?php echo $clanok[2]?>
 					</p>
 					<br><br>
 				</div>
 		<?php
 		}
 		
 	?>
 </section>

 <?php 
 	include '../../assets/pata.php'
  ?>

  </html>