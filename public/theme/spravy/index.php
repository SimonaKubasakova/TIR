<?php
	date_default_timezone_set("Europe/Bratislava");
	include '../../assets/hlavicka.php';
	include '../../assets/navbar.php';
 ?>
<section class="container pt-4"> 
		<h2 class="text-center pt-2"> Správy</h2>
		<h5 class="text-center "><?php echo date('j.n.Y H:i:s') ?></h5>	
	<?php 

		$clankyNazovSuboru = glob('*.txt');
		foreach ($clankyNazovSuboru as $subor) {
			$datum = strtotime(basename($subor,".txt"));
			$datumStr = date('j.n.Y H:i',$datum);
			$clanok = file($subor,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		?>
		<div>
			<br><h5 style="color:black; text-shadow:1px 1px 2px lightseagreen";><?php echo $clanok[0] ?></h5>
			<small>Publikované: <?php echo date('j.n.Y H:i',$datum) ?></small><br><br>
			<img style="border-radius: 25px"; src="images/<?php echo $clanok[1] ?>" ; alt="" width=250><br><br>
			<?php 	
				for ($i=2; $i < count($clanok) ; $i++) { 
					echo '<p>' . $clanok[$i] . '</p>';
				}
			?>
			<br><hr>	
		</div>
		<?php 
		}
	?>		
	</section>

 <?php 
 	include '../../assets/pata.php'
  ?>

  </html>